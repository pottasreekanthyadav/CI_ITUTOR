public function tutor_profile()
	{
		echo $user_id=$this->session->userdata('user_id');exit;
		$wer=array('id'=>$user_id);
        $data['tutorinfo']=$this->Tutor_model->getTutorData($wer);
        
        $table1='rl_subjects_tbl';
        $data['res']=$this->Tutor_model->getData($table1);
        $table='rl_qualification_tbl';
        $data['resp']=$this->Tutor_model->getData($table);
        $table2='rl_category_tbl';
        $data['cat']=$this->Tutor_model->getData($table2);
        $table3='rl_tutor_newtype_tbl';
        $data['subtype']=$this->Tutor_model->getData($table3);
        $table4='rl_language_tbl';
        $data['language']=$this->Tutor_model->getData($table4);
        $table5='rl_syllabus_tbl';
        $data['syllabus']=$this->Tutor_model->getData($table5);
        $table6='rl_location_tbl';
        $data['location']=$this->Tutor_model->getData($table6);
        echo "<pre>";
        print_r($data);exit;
        extract($_POST);
        if(isset($submit))
        {
            //$this->form_validation->set_rules('category','Category','required');
            $this->form_validation->set_rules('tutor','Tutor type','required');
            $this->form_validation->set_rules('qualification','Qualification','required');
            $this->form_validation->set_rules('college','College/University','required');
            $this->form_validation->set_rules('working','Working school/college','required');
            $this->form_validation->set_rules('teaching','Teaching experience','required');
            //$this->form_validation->set_rules('language','Language know','required');
            $this->form_validation->set_rules('syllabus','Syllabus','required');
            $this->form_validation->set_rules('subject','Subject','required');
            $this->form_validation->set_rules('location','Location','required');
            $this->form_validation->set_rules('time','Preferable time','required');
            $this->form_validation->set_rules('birth','Date of Birth','required');
            $this->form_validation->set_rules('mobile','Mobile no','required|regex_match[/^[0-9]{10,15}$/]');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('reference','Reference id','required');
            $this->form_validation->set_rules('come','Above','required');
            //$this->form_validation->set_rules('upload','upload image');
            //$this->form_validation->set_rules('resume','Resume');
            $this->form_validation->set_rules('about','About you','required|regex_match[/^[A-Za-z ]+$/]');
            if($this->form_validation->run()==true)
            {
                if(!empty($category)){
                $category_list=$category;
                foreach($category_list as $cats)
                {
                    $categories[]=$cats;
                }
                $category_list=implode(",", $categories);
                $category_list=trim($category_list,",");
            }else{
                $category_list=$cats_id;
            }
                if(!empty($language)){
                $language_list=$language;
                foreach($language_list as $langs)
                {
                    $languages[]=$langs;
                }
                $language_list=implode(",", $languages);
                $language_list=trim($language_list,",");
            }else{
                $language_list=$langs_id;
            }
                $birth=date("Y-m-d", strtotime($birth));
                if(($_FILES['picture']['name'])!=null)
                {
                    
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 3200;
                $config['max_width']            = 0;
                $config['max_height']           = 0;
                $config['file_name']='tutor_'.rand(1000,9999);
                    $this->load->library('upload',$config);
                    if($this->upload->do_upload('picture'))
                    {
                        $uploaded=$this->upload->data();
                        $picture=$uploaded['file_name'];
                    
                    }
                    else
                    { 
                        $errors=$this->upload->display_errors();
                        $data['img_upload_err']=$errors;
                        $picture="--";
                        //print_r($data);exit;
                       // $this->load->view('tutors/edit_tutor_profile_view',$data);
                    }
                }
                else
                {
                     $picture="--";
                }
                if(($_FILES['resume']['name'])!=null)
                {
                    
                $config['upload_path']          = './uploads/resume/';
                $config['allowed_types']        = 'pdf|doc|docx';
                $config['max_size']             = 1000;
                $config['file_name']='tutor_'.rand(1000,9999);
                    $this->load->library('upload',$config);
                    if($this->upload->do_upload('resume'))
                    {
                        $uploaded=$this->upload->data();
                        $resume=$uploaded['file_name'];
                    }
                    else
                    { 
                        $errors=$this->upload->display_errors();
                        $data['img_upload_err']=$errors;
                        $resume="--";
                        //print_r($data);exit;
                       // $this->load->view('tutors/edit_tutor_profile_view',$data);
                    }
                }
                else
                {
                     $resume="--";
                }

                $data=array(
                            'category_id'=>$category_list,
                            'tutor_type'=>$tutor,
                            'qualification'=>$qualification,
                            'collage_name'=>$college,
                            'working_status'=>$working,
                            'experience'=>$teaching,
                            'languages'=>$language_list,
                            'syllabus'=>$syllabus,
                            'subject_id'=>$subject,
                            'location_id'=>$location,
                            'timings'=>$time,
                            'dob'=>$birth,
                            'mobile'=>$mobile,
                            'email'=>$email,
                            'reference_id'=>$reference,
                            'known_by'=>$come,
                            'photo'=>$picture,
                            'resume'=>$resume,
                            'about_tutor'=>$about);
                $wer=array('id'=>61);
               
                $profile_update=$this->Tutor_model->updateTutor($data,$wer);
                if($profile_update)
                {
                    $this->session->set_flashdata("msg","Tutor profile updated succesfully");
                    redirect('tutors/Tutor/tutor_profile');
                }
                else
                {
                    $data['err_msg']="Sorry, Tutor profile couln't updated";
                    $this->load->view('tutors/edit_tutor_profile_view',$data);
                }
                
                //$this->load->view('tutors/edit_tutor_profile_view',$data);     
            }
            else
            {
                $this->load->view('tutors/edit_tutor_profile_view',$data);
            }

        }
        else
        {
            $this->load->view('tutors/edit_tutor_profile_view',$data);
        }
	}