<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class deal extends MS_Controller {
	public function index(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');
		$this->load->model('manage_seller_model');
		$dataa['records'] = $this->manage_seller_model->select_cat();
		$this->load->model('products');
		$dealp=$this->products->view_deal();
		$deali=$this->products->fetch_images1();
		//print_r($deali);die;
		$dealpd=array();
		foreach($dealp as $item){
			$dimg=0;
			foreach($deali as $item1){
				if(($item1['p_id'])==($item->product_id)){
					$dimg=$item1['image'];
				}
			}
			$dealpro=$this->products->product_lists3($item->product_id);
			//print_r($dealpro);die;
			$dealpd[]=array(
			'product_id' => $item->product_id,
			'product_name' => $dealpro[0]->product_name,
			'offer_price' => $item->offer_price,
			'image' => $dimg,
			);
		}
		//print_r($dealpd);die;
		$dataa['deal_product']=$dealpd;
		//print_r($dealpd);die;
		
		$this->load->view('seller/deal',$dataa);
		$this->load->view('seller/footer');
	}
	
	public function fetch(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');
		$this->load->model('products');
		$pro = $this->products->product_lists1();
		$ids=$this->input->post('category_name');
		$dat=array();
		foreach($pro as $prol){
			if(($prol->category_name)==$ids){
				$dat[]=$prol;
			}
		}
		
		$dataa['records']=$dat;
		
		$this->load->view('seller/fetch',$dataa);
		$this->load->view('seller/footer');
	}
	
	public function add_product(){
		$this->load->model('products');
		
		$ids= $this->input->post('product_id');
		$nme= $this->input->post('product_name');
		
		$dealch=array();
		if($this->input->post('dealcheck')){
			$name=$this->input->post('dealcheck');
			$images=array();
			foreach($name as $item){
				if($item=='on'){
					$dealch[]=1;
				}else{
					$dealch[]=0;
				}
			}
			}else{
				$dealch=array();
			}
		$addopt=array();
		$oprice=$this->input->post('offer_price');
		for($i=0;$i< sizeof($ids);$i++){
			$addopt[$i]=array(
			'product_id' => $ids[$i],
			'offer_price' => $oprice[$i],
			'deal_check' => $dealch[$i],
			);
		}
		$dat=array();
		foreach($addopt as $item){
			if($item['deal_check']==1){
				$dat[]=$item;
			}
			
		}
		foreach($dat as $item1){
			$dat1=array(
			'deal_check' => $item['deal_check'],
			'offer_price' => $item['offer_price'],
			);
			$this->products->edit_done($item['product_id'],$dat1);
		}
		foreach($dat as $item1){
			$dat1=array(
			'product_id' => $item['product_id'],
			'offer_price' => $item['offer_price'],
			);
			$rec=$this->products->view_deal();
			$app=0;
			foreach($rec as $item3){
				if(($item3->product_id)==$dat1['product_id']){
					$app=1;
				}
				
			}
			
			if($app==0){
				$this->products->add_to_deal($dat1);
			}
			
			
			
		}
		 redirect(base_url('deal'));
		
		
		//edit_done
	
	}
	public function deal_edit(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');
		$this->load->model('products');
		$id=$this->input->post('product_id');
		$dealp=$this->products->view_deal1($id);

		$deali=$this->products->fetch_images1();
		//print_r($dealp);die;
		$dealpd=array();
		foreach($dealp as $item){
			$dimg=0;
			foreach($deali as $item1){
				if(($item1['p_id'])==($item->product_id)){
					$dimg=$item1['image'];
				}
			}
			$dealpro=$this->products->product_lists3($item->product_id);
			
			$dealpd[]=array(
			'product_id' => $item->product_id,
			'product_name' => $dealpro[0]->product_name,
			'offer_price' => $item->offer_price,
			'image' => $dimg,
			);
		}
		//print_r($dealpd);die;
		$dataa['deal_product']=$dealpd;
		//print_r($dealpd);die;
		
		$this->load->view('deal/edit',$dataa);
		$this->load->view('seller/footer');
		//echo $this->input->post('product_id');die;
		//echo "dsgsd";die;
	}
	public function deal_edit_hit(){
		$this->load->model('products');
		$id=$this->input->post('product_id');
		$dealp=array(
		'offer_price' =>$this->input->post('offer_price'),
		);
		
		
		$this->products->edit_deal($id,$dealp);
		 redirect(base_url('deal'));
	}
	public function deal_remove(){
		$id=$this->input->post('product_id');
		$this->load->model('products');
		$this->products->del_deal($id);
		redirect(base_url('deal'));
	}
}
?>