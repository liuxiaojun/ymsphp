<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller {
	// http://www.thinkphp.cn/info/101.html
    public function insert(){
        $Form   =   D('Form');
        if($Form->create()) {
            $result =   $Form->add();
            if($result) {
                $this->success('�����ɹ���');
            }else{
                $this->error('д�����');
            }
        }else{
            $this->error($Form->getError());
        }
    }

	public function read($id=0){
		$Form   =   M('Form');
		// ��ȡ����
		$data =   $Form->find($id);
		if($data) {
			$this->data =   $data;// ģ�������ֵ
		}else{
			$this->error('���ݴ���');
		}
		$this->display();
	}


}