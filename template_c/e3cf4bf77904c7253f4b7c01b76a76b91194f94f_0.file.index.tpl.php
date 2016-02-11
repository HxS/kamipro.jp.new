<?php
/* Smarty version 3.1.29, created on 2016-02-11 13:16:25
  from "C:\xampp\htdocs\kamipro.jp\contents\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56bc7b999cb622_74790161',
  'file_dependency' => 
  array (
    'e3cf4bf77904c7253f4b7c01b76a76b91194f94f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kamipro.jp\\contents\\index.tpl',
      1 => 1455192891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:my_computer.tpl' => 1,
    'file:pamphlet.tpl' => 1,
    'file:mail_box.tpl' => 1,
    'file:trash_box.tpl' => 1,
    'file:link.tpl' => 1,
    'file:recruit.tpl' => 1,
  ),
),false)) {
function content_56bc7b999cb622_74790161 ($_smarty_tpl) {
?>

<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>株式会社神風プロダクション</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <meta property="og:site_name" content="株式会社　神風プロダクション">
        <meta property="og:title" content="株式会社　神風プロダクション">
        <meta property="og:image" content="http://www.kamipro.jp/ogp.png">
        <meta property="og:type" content="website">
        <link rel="shortcut icon" href="/favicon.ico">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="styles/vendor.css">
        <link rel="stylesheet" href="styles/main.css">
    </head>
    
    <body>
<div id="fb-root"></div>
<?php echo '<script'; ?>
>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.3&appId=790402024414197";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
        <nav>
            <ul>
                <li data-toggle="modal" data-target="#ModalAbout"><img src="images/mycompany.png" width="47" height="47" alt="ﾏｲｺﾝﾋﾟｭｰﾀ" /><div class="menu__title">ﾏｲ ｺﾝﾋﾟｭｰﾀ</div></li>
                <li data-toggle="modal" data-target="#ModalNews"><img src="images/news.png" width="48" height="48" alt="ﾌﾟﾚｽ ﾘﾘｰｽ" /><div class="menu__title">ﾌﾟﾚｽ ﾘﾘｰｽ</div></li>
                <li data-toggle="modal" data-target="#ModalPerformance"><img src="images/performance.png" width="48" height="36" alt="業務案内" /><div class="menu__title">業務案内</div></li>
                <li data-toggle="modal" data-target="#ModalContact"><img src="images/contact.png" width="48" height="48" alt="受信ﾄﾚｲ" /><div class="menu__title">受信ﾄﾚｲ</div></li>
                <li data-toggle="modal" data-target="#ModalTrash"><img src="images/trash.png" width="44" height="48" alt="ごみ箱" /><div class="menu__title">ごみ箱</div></li>
                <li data-toggle="modal" data-target="#ModalLinks"><img src="images/link.png" width="48" height="48" alt="ﾘﾝｸ" /><div class="menu__title">ﾘﾝｸ</div></li>
                <li data-toggle="modal" data-target="#ModalRecruit"><img src="images/recruit.png" width="48" height="48" alt="ﾘｸﾙｰﾄ" /><div class="menu__title">ﾘｸﾙｰﾄ</div></li>
            </ul>
        </nav>

        <div id="ModalAbout" class="modal-dialog" data-backdrop="false">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"><img src="images/mycompany_m.png" width="23" height="23" alt="ﾏｲｺﾝﾋﾟｭｰﾀ" /> マイコンピュータ</h2>
                    <ul>
                        <li><img class="modal__button--min" src="images/down.png" alt="down" width="23" height="24" data-dismiss="modal"></li>
                        <li><img class="modal__button--max" src="images/big.png" alt="down" width="23" height="24"></li>
                        <li><img class="modal__button--del" src="images/del.png" alt="down" width="23" height="24" data-dismiss="modal"></li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="contents">
                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:my_computer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        
        <div class="modal-dialog" id="ModalNews" data-backdrop="false">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"><img src="images/news_m.png" width="23" height="23" alt="ﾌﾟﾚｽ ﾘﾘｰｽ" /> ﾌﾟﾚｽ ﾘﾘｰｽ</h2>
                    <ul>
                        <li><img class="modal__button--min" src="images/down.png" alt="down" width="23" height="24" data-dismiss="modal"></li>
                        <li><img class="modal__button--max" src="images/big.png" alt="down" width="23" height="24"></li>
                        <li><img class="modal__button--del" src="images/del.png" alt="down" width="23" height="24" data-dismiss="modal"></li>
                    </ul>
                </div>
                <div class="modal-body" id="NewsArea"><div class="fb-page" data-href="https://www.facebook.com/kamiproduct" data-width="500" data-height="600" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/kamiproduct"><a href="https://www.facebook.com/kamiproduct">株式会社 神風プロダクション</a></blockquote></div></div></div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        
        <div id="ModalPerformance" class="modal-dialog" data-backdrop="false">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"><img src="images/performance_m.png" width="23" height="17" alt="業務案内" /> 業務案内</h2>
                    <ul>
                        <li><img class="modal__button--min" src="images/down.png" alt="down" width="23" height="24" data-dismiss="modal"></li>
                        <li><img class="modal__button--max" src="images/big.png" alt="down" width="23" height="24"></li>
                        <li><img class="modal__button--del" src="images/del.png" alt="down" width="23" height="24" data-dismiss="modal"></li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="contents">
                    	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pamphlet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->

        <div id="ModalContact" class="modal-dialog" data-backdrop="false">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"><img src="images/contact_m.png" width="23" height="23" alt="受信ﾄﾚｲ" /> 受信ﾄﾚｲ</h2>
                    <ul>
                        <li><img class="modal__button--min" src="images/down.png" alt="down" width="23" height="24" data-dismiss="modal"></li>
                        <li><img class="modal__button--max" src="images/big.png" alt="down" width="23" height="24"></li>
                        <li><img class="modal__button--del" src="images/del.png" alt="down" width="23" height="24" data-dismiss="modal"></li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="contents">
                    	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:mail_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->

        <div id="ModalTrash" class="modal-dialog" data-backdrop="false">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"><img src="images/trash_m.png" width="21" height="23" alt="ごみ箱" /> ごみ箱</h2>
                    <ul>
                        <li><img class="modal__button--min" src="images/down.png" alt="down" width="23" height="24" data-dismiss="modal"></li>
                        <li><img class="modal__button--max" src="images/big.png" alt="down" width="23" height="24"></li>
                        <li><img class="modal__button--del" src="images/del.png" alt="down" width="23" height="24" data-dismiss="modal"></li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="contents">
                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:trash_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        
        <div id="ModalLinks" class="modal-dialog" data-backdrop="false">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"><img src="images/link_m.png" width="23" height="23" alt="リンク" /> リンク</h2>
                    <ul>
                        <li><img class="modal__button--min" src="images/down.png" alt="down" width="23" height="24" data-dismiss="modal"></li>
                        <li><img class="modal__button--max" src="images/big.png" alt="down" width="23" height="24"></li>
                        <li><img class="modal__button--del" src="images/del.png" alt="down" width="23" height="24" data-dismiss="modal"></li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="contents">
                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        
        <div id="ModalRecruit" class="modal-dialog" data-backdrop="false">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"><img src="images/recruit_m.png" width="23" height="23" alt="リクルート" /> リクルート</h2>
                    <ul>
                        <li><img class="modal__button--min" src="images/down.png" alt="down" width="23" height="24" data-dismiss="modal"></li>
                        <li><img class="modal__button--max" src="images/big.png" alt="down" width="23" height="24"></li>
                        <li><img class="modal__button--del" src="images/del.png" alt="down" width="23" height="24" data-dismiss="modal"></li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="contents">
                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:recruit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        
        <div id="Rect"></div>
        
        <div id="TextLogo"><img src="images/logo_text.png" width="230" height="40" alt="神風プロダクション" /></div>
        
        <div id="StartMenu">
            <ul>
                <a href="http://store.shopping.yahoo.co.jp/kamikazeproductions/" target="_blank"><li><img src="images/shop.png" width="48" height="48" alt="カミプロ謹製直売所" /> カミプロ謹製直売所(<u>K</u>)</li></a>
                <a href="http://www.gendai-media.jp/" target="_blank"><li><img src="images/gen-dai.png" width="48" height="47" alt="GEN-DAI" /> （株）GEN-DAI(<u>G</u>)</li></a>
                <a href="http://www.ar-proj.kamipro.jp/" target="_blank"><li><img src="images/bknko.png" width="48" height="48" alt="唐人町ＡＲプロジェクト" /> 唐人町ＡＲプロジェクト(<u>T</u>)</li></a>
                <a href="#" target="_blank"><li><img src="images/unknown.png" width="48" height="48" alt="新しい不明ファイル" /> 新しい不明ファイル</li></a>
            </ul>
        </div>
        <div id="TaskBar">
            <div class="taskbar__startBtn">
                <a href="#"><img src="images/button_start_pushed.png" width="101" height="54" alt="スタート" class="startBtn--pushed"/><img src="images/start.png" width="101" height="54" alt="スタート" class="startBtn--default"/></a>
            </div>
            <div class="taskbar__bar">
                <div class="taskbar__line"></div>
                <div class="taskbar__windowArea">
                    <ul>
                        <li class="taskbar__window" data-toggle="modal" data-target="#ModalAbout"><img src="images/mycompany_s.png" width="17" height="17" alt="ﾏｲｺﾝﾋﾟｭｰﾀ" /> ﾏｲｺﾝﾋﾟｭｰﾀ</li>
                        <li class="taskbar__window" data-toggle="modal" data-target="#ModalNews"><img src="images/news_s.png" width="17" height="17" alt="ﾌﾟﾚｽ ﾘﾘｰｽ" /> ﾌﾟﾚｽ ﾘﾘｰｽ</li>
                        <li class="taskbar__window" data-toggle="modal" data-target="#ModalPerformance"><img src="images/performance_s.png" width="17" height="13" alt="業務案内" /> 業務案内</li>
                        <li class="taskbar__window" data-toggle="modal" data-target="#ModalContact"><img src="images/contact_s.png" width="17" height="17" alt="受信ﾄﾚｲ" /> 受信ﾄﾚｲ</li>
                        <li class="taskbar__window" data-toggle="modal" data-target="#ModalTrash"><img src="images/trash_s.png" width="16" height="17" alt="ごみ箱" /> ごみ箱</li>
                        <li class="taskbar__window" data-toggle="modal" data-target="#ModalLinks"><img src="images/link_s.png" width="17" height="17" alt="ﾘﾝｸ" /> ﾘﾝｸ</li>
                        <li class="taskbar__window" data-toggle="modal" data-target="#ModalRecruit"><img src="images/recruit_s.png" width="17" height="17" alt="ﾘｸﾙｰﾄ" /> ﾘｸﾙｰﾄ</li>
                    </ul>
                </div>
                <div class="taskbar__toolArea">
                    <a href="https://www.facebook.com/sharer.php?u=http%3a%2f%2fwww%2ekamipro%2ejp" target="_blank"><img src="images/fb.png" width="16" height="16" alt="facebook" /></a>
                    <a href="http://twitter.com/share?url=http%3a%2f%2fwww%2ekamipro%2ejp&text=神風プロダクション" target="_blank"><img src="images/tw.png" width="16" height="16" alt="twitter" /></a>
                    <a href="https://plus.google.com/share?url=www%2ekamipro%2ejp" target="_blank"><img src="images/g.png" width="16" height="16" alt="google+" /></a>
                    <a href="javascript:void(0);" class="lunch"><img src="images/gohan.png" width="16" height="16" alt="ごはん" title="ご飯を食べよう" /></a>
                    <img src="images/clock.png" width="15" height="15" alt="ごはん" />
                    <span id="Clock">12:34</span>
                </div>
            </div>
        </div>

        <?php echo '<script'; ?>
 src="scripts/vendor.js"><?php echo '</script'; ?>
>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <?php echo '<script'; ?>
>
          (function(b,o,i,l,e,r) { b.GoogleAnalyticsObject=l;b[l]||(b[l]=
          function() { (b[l].q=b[l].q||[]).push(arguments) } );b[l].l=+new Date;
          e=o.createElement(i);r=o.getElementsByTagName(i)[0];
          e.src='//www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e,r) } (window,document,'script','ga'));
          ga('create','UA-XXXXX-X');ga('send','pageview');
        <?php echo '</script'; ?>
>

            <?php echo '<script'; ?>
 src="scripts/main.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
