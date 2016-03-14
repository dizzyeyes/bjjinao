<?php
include_once "ProvinceFormat.php";

abstract class DataProvider {
	protected $repost_set;
	protected $report;

	public function __construct($rs) {
		$this->repost_set = $rs;
		$this->report = array (
			'status' => array (),
			'user' => array ()
		);
	}

	public function __get($key) {
		$pieces = explode('__', $key);
		return $this->report[$pieces[0]][$pieces[1]];
	}

	public function __set($key, $val) {
		$pieces = explode('__', $key);
		$this->report[$pieces[0]][$pieces[1]] = $val;
	}
	
	/**生成比较函数，用于对数组作排序*/
	public function create_cmp_function($key, $type = 'object', $desc = true, $flag = 'STRING' ) {
		$param_str = '$a, $b';
		if($type == 'array'){
			if ($desc){
				$code_str = 'if( $a[\'' . $key . '\'] == $b[\'' . $key . '\'] ) return 0;' . 'return ( $a[\'' . $key . '\'] >  $b[\'' . $key . '\'] ) ? -1 : 1;';
			} else{
				$code_str = 'if( $a[\'' . $key . '\'] == $b[\'' . $key . '\'] ) return 0;' . 'return ( $a[\'' . $key . '\'] >  $b[\'' . $key . '\'] ) ? 1 : -1;';
			}
			return create_function($param_str, $code_str);
		} else{
			if ($desc){
				$code_str = 'if( $a->' . $key . ' == $b->' . $key . ' ) return 0;' . 'return ( $a->' . $key . ' >  $b->' . $key . ' ) ? -1 : 1;';
			} else{
				$code_str = 'if( $a->' . $key . ' == $b->' . $key . ' ) return 0;' . 'return ( $a->' . $key . ' >  $b->' . $key . ' ) ? 1 : -1;';
			}
			return create_function($param_str, $code_str);
		}
	}
	
	protected function gradToCoeff($grad, $gradArray, $coeffArray){
		$index = 0;
		while($grad - $gradArray[$index] > 0){
			if($index >= count($gradArray)-1) break;
			$index ++;
		}
//		echo "<br/>$grad : grad index: $index<br/>";
		return $coeffArray[$index];
	}
	
	/**从大到小的数组中获取位置：
	 * flag=='g' 表示返回大于等于pivot的第一个位置 
	 **flag == 'l' 表示返回小于等于pivot的最后一个位置 */
	protected function index($arr, $pivot, $flag = false){
		$left = 0;
		$right = count($arr) - 1;
		while(true){
			$i = (int)(($left + $right)/2);
//			echo 'i= '.$i.'; left='.$left.'; right='.$right.'<br/>';
			if($flag == 'g') {
				$cmp = ( $arr[$i] >= $pivot && $arr[$i+1] < $pivot );
			}
			else{
				$cmp = ( $arr[$i] <= $pivot && $arr[$i-1] > $pivot );
			}
			if( $right <= $left || $cmp ) break;
			else if( $arr[$i] < $pivot ){
				$right = $i - 1;
			} else {
				$left = $i + 1;
			}
		}
		return $i;
	}
	/**返回时间段内的微博,默认从start到最近一条微博*/
//	protected function slice_status_by_time($start, $end = false){
//		if( !$end ) $end = time();
//		$keys = array_keys( $this->repost_set->repostItemSet );
//		$vals = array_values( $this->repost_set->repostItemSet );
////		$index = $this->binary_search(array_map( create_function('$item', 'return $item->created_time;'), $vals), $start, $end);
//		$val_array = array_map( create_function('$item', 'return $item->created_time;'), $vals);
//		$l = $this->index($val_array, $end, 'l');
//		$r = $this->index($val_array, $start, 'g');
//		$sliced_items = array_combine(array_slice($keys, $l, $r - $l + 1), array_slice($vals, $l, $r - $l + 1));
//		return $sliced_items;
//	}
	
	/**返回时间段内的微博,默认从start到最近一条微博*/
	protected function slice_status_by_time($start, $end = false){
		if( !$end ) $end = time();
		$sliced_items = array();
		foreach ($this->repost_set->repostItemSet as $id => $item){
			if((int)$item->created_time > $start && (int)$item->created_time < $end){   //满足条件加入数组，不满足退出循环
				$sliced_items[] = $item;
			}
			else {
				break;
			}
		}
		return $sliced_items;
	}
	
	
	/**微博时间段,返回每条微博id及其对应的时间段*/
	protected function cluster_status_by_time($span_time, $items){
		$item_ids = array_keys($items);
		$item_span = array_map(create_function('$time', 'return (int)($time/'.$span_time.');'), array_map(create_function('$item', 'return $item->created_time;'), $items));
		if(!$item_ids){
			return array();
		}
		return array_combine($item_ids, $item_span);
	}
	
	/**账户认证信息数据格式*/
	protected function format_verified_data($data){
		$ret = array( new stdClass(), new stdClass(), new stdClass(), new stdClass() );
		$num = array_sum($data);
		$ret[0]->name = '普通用户'; $ret[0]->value = 0;
		$ret[1]->name = '个人认证'; $ret[1]->value = 0;
		$ret[2]->name = '企业认证'; $ret[2]->value = 0;
		$ret[3]->name = '微博达人'; $ret[3]->value = 0;
		foreach($data as $key => $val){
			if($key == -1) $ret[0]->value = $val/$num;
			else if($key == 0) $ret[1]->value = $val/$num ;
			else if($key == 2) $ret[2]->value = $val/$num;
			else if($key >= 200) $ret[3]->value += $val/$num;
		}
		foreach($ret as $r){
			$r->value = (float)number_format($r->value, 3);
		}
		return $ret;
	}
	/**账户性别信息数据格式*/
	protected function format_gender_data($data){
		$ret = array();
		$num = array_sum($data);
		
		$ret[] = number_format(1.0*$data['m']/$num, 3);
		$ret[] = number_format(1.0*$data['f']/$num, 3);
		
		return $ret;
	}
	/**转发层级数据格式*/
	protected function format_repostlevel_data($data){
		$ret = new stdClass();
		$ret->name = array('一级', '二级','三级', '四级以上');
		$ret->data = array();
		ksort($data);
		foreach($data as $key => $val){
			if($key <= 2 ){ 
				$ret->data[$key] = $val;
			}
			else if($key == 3){
				$ret->data[3] = $val;   //需要定义
			}else{
				$ret->data[3] += $val;
			}
		}
		return $ret;
	}
	/**转发时间数据格式*/
	protected function format_reposttime_data($data){
		$ret = array();
		ksort($data);
		foreach($data as $key=>$val){
			$ret[] = array((float)($key.'000'), $val);
		}
		return $ret;
	}
	/**水军判断*/
	protected function judge_waterarmy($ruser){
		if( $ruser->user->item_count == 0 || $ruser->user->fans_count == 0 || preg_match("/手机用户(.*)[\d]+/i", $ruser->user->name) )
			return 1;
		return 0;
	}
	/**水军信息数据格式*/
	protected function format_waterarmy_data($data){
		$ret = new stdClass();
		$num = array_sum($data);
		if(isset($data[1])){
			$water_count = $data[1];
		}else{
			$water_count = 0;
		}
		$ret->percentage = number_format(1.0 * $water_count / $num, 3);
		return $ret;
	}
	
	/**活跃账户判断
	 * 1.微博数》=15
	 * 2.粉丝数》=15
	 * 日均发博》=0.2
	 */
	protected function judge_active($ruser){
		$registerDay = (time()-$ruser->user->register_time)/(24*60*60);
		if( $ruser->user->item_count >= 15 && $ruser->user->fans_count >= 15 &&  $ruser->user->item_count/number_format($registerDay)>=0.2){
			return 1;
		}
		return 0;
	}
	
	/**活跃账户数据格式*/
	protected function format_activeAccount_data($data){
		$ret = new stdClass();
		$num = array_sum($data);
		if(isset($data[1])){
			$water_count = $data[1];
		}else{
			$water_count = 0;
		}
		$ret->percentage = number_format(1.0 * $water_count / $num, 3);
		return $ret;
	}
	
	/**地域信息数据格式*/
	protected function format_province_data($data){
		$ret = array();
		$num = array_sum($data);
		arsort($data);
		
		$keys = array_slice(array_keys($data), 0, 10);
		$vals = array_slice(array_values($data), 0, 10);
		$data = array_combine($keys, $vals);
		
		foreach($data as $key => $val){
			$province_str = ProvinceFormat::format($key)->province;
			$elem = new stdClass();
			$elem->name = $province_str;
			$elem->value = $val;
			$ret[] = $elem;
		}
		return $ret;
	}
	
	/**获取关键字*/
	protected function get_keywords($words_list){
		$return_len = 20;
		$merge_len = 10;
		try{
			$kw_gen = new Keywords();
			$thriftHelper = new ThriftHelper ();
			$thriftHelper->init (2);
			$ret = $kw_gen -> getListKeywords($thriftHelper->keywordsOperator,array_values( $words_list ), $return_len, $merge_len);
			$res = array();
			foreach($ret->keyword_score as $key => $val){
				$tmp = new stdClass();
				$tmp->text = $key;
				$tmp->weight = $val;
				$res[] = $tmp;
			}
			return $res;
		} catch(Exception $e){
			return "关键字服务暂时不可用";
		}
//		if(!$ret->keyword_score) throw new Exception("关键字服务暂时不可用");
//		else{
//			$res = array();
//			foreach($ret->keyword_score as $key => $val){
//				$tmp = new stdClass();
//				$tmp->text = $key;
//				$tmp->weight = $val;
//				$res[] = $tmp;
//			}
//			return $res;
//		}
	}
}
?>