<?php
/*
Template Name: 隐私说明
*/
?>


<?php get_header(); ?>

	<div class="main help">
		<div class="wrapper">
			<div class="site">
				<span>您的位置：</span>
				<a href="/">首页 </a> &gt;
				<a href="javascript:;">售后服务</a> &gt;
				<a href="#">隐私声明</a>
			</div>
			<div class="clearfix">
				<?php get_template_part( 'sections/help-sidebar' ); ?>
				<div class="content">
					
					<div class="mid-box gia regist w-740">
						<p class="title-l">隐私声明</p>
						<p>本网站承认、尊重并保护注册用户向本网提供的任何或所有个人信息（包括姓名、电话、邮箱以及通讯地址等）以及注册用户根据中华人民共和国民事法律规定享有的隐私权。</p>
						<p>注册用户可以随时通知本网有关注册用户任何信息的变化，如地址、职务、电话号码或电子邮件地址的变更，以帮助本网确保注册用户个人信息的准确性。本网将致力于保护注册用户的个人信息和隐私权，并尽全力保证这些信息的安全。</p>
						<p>用户注册所提供的身份证信息，本网站只做留存查询验证使用，不用做任何其他商业途径。</p>
						<p>WE网站留存的用户信息，不会在未经合法用户授权时公开、编辑或透露。其注册资料及保存在WE网站中的非公开内容,除非有法律许可要求或WE网站在诚信的基础上认为透露这些信息在以下四种情况是必要的：</p>
						<p>(1)  遵守有关法律规定，遵从WE网站合法服务程序。</p>
						<p>(2)  保持维护WE网站的商标所有权。</p>
						<p>(3)  在紧急情况下竭力维护用户个人和社会大众的隐私安全。</p>
						<p>(4)  符合其他相关的要求。</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	!function($) {
		$(document).ready(function(){
			var $type = $(".type")
			$type.on("click",function(){
				$type.removeClass("on")
				$(this).addClass("on")
			})
		})
	}(jQuery)
	
	</script>
<?php get_footer(); ?>