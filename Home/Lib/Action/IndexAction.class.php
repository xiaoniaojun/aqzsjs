<?php

class IndexAction extends BaseAction {

	public function index() {
		
		if (IS_POST) {
			if (isset($_POST['idcard']) && $_POST['idcard'] != "" && is_numeric($_POST['id'])) {
				$student = M('Member')->where('school_ID='.$_POST['id'])->find();
				if ($student["password"] == $_POST['idcard']) {
					session("stu",$student);
					$this->redirect('Index/info');
				} else {
					$this->assign('error', "学号或身份证错误！");
				}
			} else {
				$this->assign('error', "学号或身份证错误！");
			}
		}
		$this->display();
	}

	public function info() {
		if (session("stu") != NULL) {
			$this->assign('stu',session("stu"));
			$this->display();
			return 0;
		}
		$this->redirect('Index/index');
	}

	public function out() {
		session("stu", null);
		$this->redirect('Index/index');
	}

	public function run() {
		$stu = session("stu");
		if (session("stu") != NULL && $stu['isdone'] == 0) {
			if (IS_POST) {
				$data["fraction"] = 0;
				$data["answer"] = "";
				$daan = explode("|",M("Ti")->where('id='.$stu['ti_id'])->getField("daan"));
				for ($i=1; $i < 51; $i++) {
					if ($daan[$i - 1] == $_POST["q".$i]) {
						$data["fraction"] += 2;
					}
					$data["answer"] .= $_POST["q".$i] . "|";
				}
				$data["isdone"] = 1;
				$stu = session("stu");
				$stu['fraction'] = $data["fraction"];
				$stu['answer'] = $data["answer"];
				$stu['isdone'] = 1;
				session("stu", $stu);
				M("Member")->where('id='.$stu['id'])->save($data);
				$this->success("提交成功！<br/>你的得分为："."<span style='color:red'>".$data["fraction"]."</span>", 'info', 5);
				return 0;
			}
			$this->assign('ti', "Home/Tpl/ti/" . $stu['ti_id'] . ".html");
			$this->display();
		} else {
			$this->redirect('Index/info');
		}
	}

	public function error() {
		$stu = session("stu");
		if ($stu != NULL && $stu['isdone'] == 1) {
			$daan = explode("|",M("Ti")->where('id='.$stu['ti_id'])->getField("daan"));
			$answer = explode("|",$stu['answer']);
			for ($i=0; $i < 50; $i++) { 
				if ($daan[$i] != $answer[$i]) {
					$this->assign('q'.$i, true);
				}
			}
			$this->assign('ti', "Home/Tpl/error/error_" . $stu['ti_id'] . ".html");
			$this->display();
		} else {
			$this->redirect('Index/info');
		}
	}

	public function rand() {
		return 0;
		$ti = "";
		$M = M('Ti');
		$S = M("Subject");
		for ($k=1; $k < 51; $k++) {
			$tis = explode("|",$M->where('id='.$k)->getField("ti"));
			for ($i=0, $j = 1; $i < 50; $i++, $j++) {
				$ti .= '<div class="div_question" id="div10">
	                        <div class="div_title_question_all">
	                            <div id="divTitle10" class="div_title_question">
	                                ' . $j . '、' . $S->where('id='.$tis[$i])->getField("timu") . '<span style="color:red;">&nbsp;' . $S->where('id='.$tis[$i])->getField("answer") . '</span>
	                            </div>
	                            <div style="clear:both;">
	                            </div>
	                        </div>
	                        <div class="div_table_radio_question <present name="q'. $j .'">error</present>" id="divquestion10">
	                            <div class="div_table_clear_top">
	                            </div>
	                            <ul>
	                                <li style="width:99%;">
	                                    <input type="radio" name="q' . $j . '" value="1">
	                                    <label>
	                                         ' . $S->where('id='.$tis[$i])->getField("options1") .'
	                                    </label>
	                                </li>
	                                <li style="width:99%;">
	                                    <input type="radio" name="q' . $j . '" value="2">
	                                    <label>
	                                        ' . $S->where('id='.$tis[$i])->getField("options2") .'
	                                    </label>
	                                </li>
	                                <li style="width:99%;">
	                                    <input type="radio" name="q' . $j . '" value="3">
	                                    <label>
	                                        ' . $S->where('id='.$tis[$i])->getField("options3") .'
	                                    </label>
	                                </li>
	                                <li style="width:99%;">
	                                    <input type="radio" name="q' . $j . '" value="4">
	                                    <label>
	                                        ' . $S->where('id='.$tis[$i])->getField("options4") .'
	                                    </label>
	                                </li>
	                                <div style="clear:both;">
	                                </div>
	                            </ul>
	                            <div style="clear:both;">
	                            </div>
	                            <div class="div_table_clear_bottom">
	                            </div>
	                        </div>
	                    </div>
	                    ';
			}
			$file = fopen("error_" . $k. ".html","w");
			fwrite($file,$ti);
			fclose($file);
			$ti = "";
		}
	}

	function bench() {
		$M("Member")->where('id=1')->setInc("fraction",1);
		$this->display("Index/index");
	}


}

?>