<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
        parent::__construct();

        // Load image model
        $this->load->model('image_model');
    
	}

	// image list method
    public function index() {
        $data['page'] = 'img-list';
        $data['title'] = '';
        $data['imgInfo'] = $this->image_model->getImgList();    
		$this->load->view('images/img', $data);
		
		// $this->load->view('templates/footer');
    }
    
    Public function listData() {

        $data = array();
        
        // Get rows count
        $conditions['returnType']     = 'count';
        $rowsCount = $this->image_model->getRows($conditions);
        
        // Get rows
        $conditions['returnType'] = '';
        $data['images'] = $this->image_model->getRows($conditions);
        $data['title'] = 'Image List';
	}
	

    Public function addImagesDetails() {
		// print_r("sds");
		// die;
        $err = $status = 0;
        $msg = '';
        $imgData = array();

        // Get iuser inputs
        $header_title = $this->input->post('header_title');
        $description = $this->input->post('description');
        $cta_text = $this->input->post('cta_text');
        $header_url = $this->input->post('header_url');
        $cta_url = $this->input->post('cta_url');
        $bg_desk_url = $this->input->post('bg_desk_url');
        $bg_mob_url = $this->input->post('bg_mob_url');
        $display_order = $this->input->post('display_order');
        $is_promo = $this->input->post('is_promo');
        $promo_start_at = $this->input->post('promo_start_at');
        $promo_end_at = $this->input->post('promo_end_at');

        // Validate form fields
        // if(empty($header_title) || empty($description)){
        //     $err = 1;
        //     $msg .= 'Please enter header.<br/>';
        // }

        if(empty($bg_desk_url) || empty($bg_mob_url) || empty($header_url) || empty($cta_url) || empty($header_title) || empty($description)){
            $err = 1;
            $msg .= 'Please fill all field.<br/>';
        }

		if ($is_promo == 1) {
			if (empty($promo_start_at) && empty($promo_end_at)) {
				$err = 1;
				$msg .= 'Please enter promotion start and End dates.<br/>';
			}

			$current_date = date('y-m-d');
			if (strtotime($promo_end_at) < strtotime($current_date)) {
				$err = 1;
				$msg .= 'Please enter valid End date.<br/>';
			}

		}

		// $url = $bg_mob_url;
		$pattern = "|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i";
		if (!preg_match($pattern, $bg_mob_url)) {
			$err = 1;
			$msg .= 'Please enter valid url for Background Mobile Url.</br>';
		}
		if (!preg_match($pattern, $header_url)) {
			$err = 1;
			$msg .= 'Please enter valid url Redirect Url.</br>';
		}
		if (!preg_match($pattern, $cta_url)) {
			$err = 1;
			$msg .= 'Please enter valid url Button Redirect Url.</br>';
		}
		if (!preg_match($pattern, $bg_desk_url)) {
			$err = 1;
			$msg .= 'Please enter valid url Background Desktop Url.</br>';
		}

        if ($err == 0) {
            $imgData = array(
                'header_title' => $header_title,
                'description'  => $description,
                'cta_text'     => $cta_text,
                'header_url'   => $header_url,
                'cta_url'      => $cta_url,
                'bg_desk_url'  => $bg_desk_url,
                'bg_mob_url'   => $bg_mob_url,
				'display_order'=> $display_order,
				'is_promo'     => $is_promo,
                'promo_start_at'=> date("Y-m-d", strtotime($promo_start_at)),
                'promo_end_at'  => date("Y-m-d", strtotime($promo_end_at)),
			);
			
			if ($is_promo == 0) {
				$promo_start_at = 0;
				$promo_end_at = 0;

				$imgData = array(
					'header_title' => $header_title,
					'description'  => $description,
					'cta_text'     => $cta_text,
					'header_url'   => $header_url,
					'cta_url'      => $cta_url,
					'bg_desk_url'  => $bg_desk_url,
					'bg_mob_url'   => $bg_mob_url,
					'display_order'=> $display_order,
					'is_promo'     => $is_promo,
					'promo_start_at'=> $promo_start_at,
					'promo_end_at'  => $promo_end_at,
				);
			}

            // insert data
            $insert = $this->image_model->insert($imgData);

            if ($insert) {
                $status = 1;
                $msg .= 'Added image details';
            }
            else {
                $msg .= 'Field insert';
            }
        }

        // return response as json
        $msgType = ($status == 1)?'alert-success':'alert-danger';
        $msgStatus = '<p> class="alert '. $msgType. '">' .$msg. '</p>';
        $response = array(
            'status' => $status,
            'msg' => $msg
        ); 
        echo json_encode($response);
	}

	// get image detail
	public function imgData(){

		$id = $this->input->post('id');

        if(!empty($id)){
            // Fetch member data
            $image = $this->image_model->getRows(array('id'=>$id));

            // Return data as JSON format
            echo json_encode($image);
		}
	}

	
	Public function edit() {
        $err = $status = 0;
        $msg = '';
		$imgData = array();
		
		// $id = $this->input->post('id');
		// print_r($id);
		// die;
		// if (!empty($id)) {
			// Get iuser inputs
			$header_title = $this->input->post('header_title');
			$description = $this->input->post('description');
			$cta_text = $this->input->post('cta_text');
			$header_url = $this->input->post('header_url');
			$cta_url = $this->input->post('cta_url');
			$bg_desk_url = $this->input->post('bg_desk_url');
			$bg_mob_url = $this->input->post('bg_mob_url');
			$display_order = $this->input->post('display_order');
			$is_promo = $this->input->post('is_promo');
			$promo_start_at = $this->input->post('promo_start_at');
			$promo_end_at = $this->input->post('promo_end_at');



			if ($is_promo == 1) {
				if (empty($promo_start_at) && empty($promo_end_at)) {
					$err = 1;
					$msg .= 'Please enter promotion start and End dates.<br/>';
				}
				
				$current_date = date('y-m-d');
				if (strtotime($promo_end_at) < strtotime($current_date)) {
					$err = 1;
					$msg .= 'Please enter valid End date.<br/>';
				}

			}

			$url = $bg_mob_url;
			$pattern = "|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i";
			if (!preg_match($pattern, $bg_mob_url)) {
				$err = 1;
				$msg .= 'Please enter valid url for Background Mobile Url.</br>';
			}
			if (!preg_match($pattern, $header_url)) {
				$err = 1;
				$msg .= 'Please enter valid url Redirect Url.</br>';
			}
			if (!preg_match($pattern, $cta_url)) {
				$err = 1;
				$msg .= 'Please enter valid url Button Redirect Url.</br>';
			}
			if (!preg_match($pattern, $bg_desk_url)) {
				$err = 1;
				$msg .= 'Please enter valid url Background Desktop Url.</br>';
			}



			if ($err == 0) {
				$imgData = array(
					'header_title' => $header_title,
					'description'  => $description,
					'cta_text'     => $cta_text,
					'header_url'   => $header_url,
					'cta_url'      => $cta_url,
					'bg_desk_url'  => $bg_desk_url,
					'bg_mob_url'   => $bg_mob_url,
					'display_order'=> $display_order,
					'is_promo'     => $is_promo,
					'promo_start_at'=> date("Y-m-d", strtotime($promo_start_at)),
					'promo_end_at'  => date("Y-m-d", strtotime($promo_end_at)),
				);

				if ($is_promo == 0) {
					$promo_start_at = 0;
					$promo_end_at = 0;

					$imgData = array(
						'header_title' => $header_title,
						'description'  => $description,
						'cta_text'     => $cta_text,
						'header_url'   => $header_url,
						'cta_url'      => $cta_url,
						'bg_desk_url'  => $bg_desk_url,
						'bg_mob_url'   => $bg_mob_url,
						'display_order'=> $display_order,
						'is_promo'     => $is_promo,
						'promo_start_at'=> $promo_start_at,
						'promo_end_at'  => $promo_end_at,
					);
				}

				// update data
				$id = $this->input->post('id');
				$update = $this->image_model->update($imgData, $id);
				// $id = $this->input->post('id');
				// $this->image_model->edit($id);

				if ($update) {
					$status = 1;
					$msg .= 'Update image details';
				}
				else {
					$msg .= 'Field update';
				}
			}
		// }
		// else {
		// 		$msg .= 'faild';
		// 	}
		

        // return response as json
        $msgType = ($status == 1)?'alert-success':'alert-danger';
        $msgStatus = '<p> class="alert '. $msgType. '">' .$msg. '</p>';
        $response = array(
            'status' => $status,
            'msg' => $msg
        ); 
        echo json_encode($response);
	}
	
	Public function delete() {
		$msg = '';
		$status = 0;
		
		$id = $this->input->post('id');

		if (!empty($id)) {
			// delete
			$delete = $this->image_model->delete($id);

			if ($delete) {
				$status = 1;
				$msg .= 'Delete successfully';
			}
			else {
				$msg .= 'Please try again';
			}
		}
		else {
			$msg .= 'ID is not match';
		}

		// return json response
		$alertType = ( $status==1 )?'alert-success':'alert-danger';
		$statusMsg = '<p class="alert '.$alertType. '">'. $msg. '<p/>';
		$response = array(
			'status' => $status,
			'msg' => $statusMsg
		);
		echo json_encode($response);
	}




}
