<form action="<?php echo base_url($this->config->config['index_url'].'sys_menus_action/addData.html');?>" method="post" id="menusACTForm">
<table class="table_add">
	<tr>
		<td class="width tright">动作名称:</td>
		<td>
			<input type="text" name="name" class="input" style="width: 80%;" datatype="s2-6" errormsg="2~6个字符内！" />
			<span class="Validform_checktip"></span>
		</td>
	</tr>
	<tr>
		<td class="tright">权限:</td>
		<td>
			<input type="text" id="action_perm" name="perm" class="input" style="width: 40%;" datatype="s1-6" errormsg="1~6个字符内！" />
			<span class="Validform_checktip"></span>
		</td>
	</tr>
	<tr>
		<td class="tright">图标:</td>
		<td>
			<input type="text" name="ico" class="input" style="width: 40%;" datatype="*2-12" errormsg="2~12个字符内！" />
			<span class="Validform_checktip"></span>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="submit" id="actionSub" value="添加" />
		</td>
	</tr>
</table>
</form>