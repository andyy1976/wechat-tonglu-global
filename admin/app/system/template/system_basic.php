﻿<div class="contentbox">
     <form id="form1" name="form1" method="post" action="">
	 <table cellspacing="2" cellpadding="5" width="100%">
	 <tr>
		<th colspan="2" align="left">信息设置</th>
	</tr>
	<tr>
		<td class="label" width="15%">网站名称:</td>
		<td width="85%">
<input name="site_name" id="site_name"  type="text" style="width:315px;" value="<?php echo isset($rt['site_name']) ? $rt['site_name'] : '';?>">
		</td>
	  </tr>
	  <tr>
		<td class="label">公司地址<!--企业地址-->:</td>
		<td><input name="company_url" id="company_url"  type="text" style="width:315px;" value="<?php echo isset($rt['company_url']) ? $rt['company_url'] : '';?>"></td>
	  </tr>
	  <tr>
		<td class="label">网站标题:</td>
		<td><input name="site_title" id="site_title"  type="text" style="width:315px;" value="<?php echo isset($rt['site_title']) ? $rt['site_title'] : '';?>"></td>
	  </tr>
	  <tr>
		<td class="label">网站logo:</td>
		<td>
		  <input name="site_logo" id="logo" type="hidden" value="<?php echo isset($rt['site_logo']) ? $rt['site_logo'] : '';?>" size="43"/>
		  <iframe id="iframe_t" name="iframe_t" border="0" src="upload.php?action=<?php echo isset($rt['site_logo'])&&!empty($rt['site_logo'])? 'show' : '';?>&ty=logo&files=<?php echo isset($rt['site_logo']) ? $rt['site_logo'] : '';?>" scrolling="no" width="445" frameborder="0" height="25"></iframe>
		</td>
	  </tr>
	  <tr>
		<td class="label">客服电话:</td>
		<td><input name="custome_phone" id="custome_phone" value="<?php echo isset($rt['custome_phone']) ? $rt['custome_phone'] : '';?>" type="text" style="width:315px;"></td>
	  </tr>
	  <tr>
		<td class="label">联系客服:</td>
		<td><input name="custome_qq" id="custome_qq" value="<?php echo isset($rt['custome_qq']) ? $rt['custome_qq'] : '';?>" type="text" style="width:315px;"><br /><em>填写QQ号码,用逗号分隔。</em></td>
	  </tr>
	  <tr>
		<td class="label">网站状态:</td>
		<td>
		<label>
		<input type="radio" name="is_open" id="is_open" value="0" <?php echo $rt['is_open']==0 ? 'checked="checked"' : '';?>/>
		关闭</label>
		<input type="radio" name="is_open" id="is_open" value="1" <?php echo $rt['is_open']==1 ? 'checked="checked"' : '';?>/>
		开启</label>
		</td>
	  </tr>
	  <tr>
		<td class="label">关闭原因:</td>
		<td><textarea name="close_desc" id="close_desc" style="width:95%;;height:200px;display:none;"><?php echo isset($rt['close_desc']) ? $rt['close_desc'] : '';?></textarea>
		<script>KE.show({id : 'close_desc',cssPath : '<?php echo ADMIN_URL.'/css/edit.css';?>' });</script>
		</td>
	  </tr>
	  <tr>
		<td class="label">会员公告:</td>
		<td>
			<textarea name="site_notice" style="width:95%;height:60px;"><?php echo isset($rt['site_notice']) ? $rt['site_notice'] : '';?></textarea>
		</td>
	  </tr>
<!--
	  <tr>
		<td class="label">网站版权信息:</td>
		<td><textarea name="copyright" id="copyright" style="width:95%;height:200px;display:none;"><?php echo isset($rt['copyright']) ? $rt['copyright'] : '';?></textarea>
		 <script>KE.show({id : 'copyright',cssPath : '<?php echo ADMIN_URL.'/css/edit.css';?>' });</script>
		</td>
	  </tr>
-->
	  <tr>
		<td>&nbsp;</td>
		<td>
		<input name="mes_save" class="mes_save" value="保存" type="submit">
		</td>
	  </tr>
	 </table>
	</form>
	<br /><br />
</div>