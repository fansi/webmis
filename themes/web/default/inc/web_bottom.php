
	</div>
	<div class="web_copy">
		Copyright © <a href="http://webmis.ksphp.com/admin" id="webmisVersion">ksphp.com</a> Tencent. All Rights Reserved
	</div>
	<!-- Index End -->
	<div id="base_url" style="display: none;"><?php echo base_url().$this->config->config['index_url']; ?></div>
	<script language="javascript" src="<?php echo base_url('../webmis/plugin/jquery/jquery-2.min.js'); ?>"></script>
	<!--[if lte IE 9]>
	<script language="javascript" src="<?php echo base_url('../webmis/plugin/jquery/jquery-1.min.js'); ?>"></script>
	<script src="<?php echo base_url('../webmis/plugin/html5.js'); ?>" type="text/javascript"></script>
	<link href="<?php echo base_url('../themes/web/'.$this->config->config['web_themes'].'/ie.css'); ?>" rel="stylesheet" type="text/css" />
	<[endif] -->
	<script language="javascript" src="<?php echo base_url('../webmis/jquery.webmis.js'); ?>"></script>
	<script language="javascript" src="<?php echo base_url('../themes/web/'.$this->config->config['web_themes'].'/web.js');?>"></script>
<?php if(@$js){ foreach($js as $val){ ?>
	<script language="javascript" src="<?php echo base_url('../themes/web/'.$this->config->config['web_themes'].'/js/'.$val); ?>"></script>
<?php }}?>
</body>
</html>