<?php

namespace Symforce\DiscuzBundle\Annotation;

use JMS\DiExtraBundle\Exception\InvalidArgumentException;
use JMS\DiExtraBundle\Exception\InvalidTypeException;

/**
 * @Annotation
 * @Target("METHOD")
 */
final class Embed extends AbstractAnnotation
{
    /** @var string */
    public $type ;

    /** @var string */
    public $method ;

    /** @var string */
    public $order ;

    const BASE_CLASS_NAME   = '\\Symforce\\DiscuzBundle\\Service\\PluginModule\\EmbedPluginModule';

    public function checkMethod(\ReflectionMethod $method) {
        if( $method->isPrivate() || $method->isProtected() ) {
            throw new \Exception(sprintf("%s with @(%s) must be public",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__
            ));
        }

        if( $method->isStatic() ) {
            throw new \Exception(sprintf("%s with @(%s) can not be static",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__
            ));
        }

        if( $method->isAbstract() ) {
            throw new \Exception(sprintf("%s with @(%s) can not be abstract",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__
            ));
        }

        if( $method->isConstructor() ) {
            throw new \Exception(sprintf("%s with @(%s) can not be constructor",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__
            ));
        }

        if( $method->isDestructor() ) {
            throw new \Exception(sprintf("%s with @(%s) can not be destructor",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__
            ));
        }

        $class  = $method->getDeclaringClass() ;
        if( !$class->isSubclassOf(self::BASE_CLASS_NAME) ) {
            throw new \Exception(sprintf("%s with @(%s) must extends from class(%s)",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__ ,
                self::BASE_CLASS_NAME
            ));
        }

        $parent = $class->getParentClass() ;
        $fn = $method->getName() ;
        if( $parent->hasMethod($fn) ) {
            throw new \Exception(sprintf("%s with @(%s) can not use with parent class method(%s)",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__ ,
                $fn
            ));
        }

        if( $this->method ) {
            if( !preg_match('/^[a-z][\w\_]+$/', $this->method) ) {
                throw new \Exception(sprintf("%s with @(%s) method(%s) invalid",
                    \Dev::getMethodDeclaring($method) ,
                    __CLASS__ ,
                    $this->method
                ));
            }
        } else {
            $this->method = $fn ;
        }

        if( !$this->type ) {
            $this->type  = 'common' ;
        }

        $exists = array(
            'common' => array( // 全局
                // extcredits.htm
                'spacecp_credit_extra', // string
                // faq.htm
                'faq_extra', // string
                // footer.htm
                'global_footer', // string
                'global_footerlink', // string
                // header.htm
                'global_cpnav_top', // string
                'global_cpnav_extra1', // string
                'global_cpnav_extra2', // string
                'global_usernav_extra1', // string
                'global_usernav_extra2', // string
                'global_usernav_extra3', // string
                'global_usernav_extra4', // string
                'global_nav_extra', // string
                'global_header', // string
                // userabout.htm
                'global_userabout_top', // array
                'userapp_menu_top', // string
                'userapp_menu_middle', // string
                'global_userabout_bottom', // array
            ),
            'forum' => array( // 论坛
                // collection_all.htm (X2.5)
                'collection_index_top', // string
                'collection_index_bottom', // string
                // collection_comment.htm (X2.5)
                'collection_nav_extra', // string
                // collection_index.htm (X2.5)
                'collection_index_top', // string
                'collection_index_bottom', // string
                // collection_mycollection.htm (X2.5)
                'collection_index_top', // string
                'collection_index_bottom', // string
                // collection_nav.htm (X2.5)
                'collection_nav_extra', // string
                // collection_view.htm (X2.5)
                'collection_viewoptions', // string
                'collection_view_top', // string
                'collection_threadlistbottom', // string
                'collection_relatedop', // string
                'collection_view_bottom', // string
                'collection_side_bottom', // string
                // discuz.htm
                'index_status_extra', // string
                'index_nav_extra', // string
                'index_top', // string
                'index_catlist_top', // string
                'index_favforum_extra', // array
                'index_catlist', // array
                'index_forum_extra', // array
                'index_forum_extra', // array
                'index_middle', // string
                'index_bottom', // string
                'index_side_top', // string
                'index_side_bottom', // string
                // discuzcode.htm
                'viewthread_attach_extra', // array
                // editor_menu_forum.htm
                'post_image_btn_extra', // string
                'post_image_tab_extra', // string
                'post_attach_btn_extra', // string
                'post_attach_tab_extra', // string
                // forumdisplay.htm
                'forumdisplay_leftside_top', // string
                'forumdisplay_leftside_bottom', // string
                'forumdisplay_forumaction', // string
                'forumdisplay_modlink', // string
                'forumdisplay_top', // string
                'forumdisplay_middle', // string
                'forumdisplay_postbutton_top', // string
                'forumdisplay_threadtype_inner', // string
                'forumdisplay_filter_extra', // string
                'forumdisplay_threadtype_extra', // string
                'forumdisplay_bottom', // string
                'forumdisplay_side_top', // string
                'forumdisplay_side_bottom', // string
                // forumdisplay_fastpost.htm
                'forumdisplay_fastpost_content', // string
                'forumdisplay_fastpost_func_extra', // string
                'forumdisplay_fastpost_ctrl_extra', // string
                'global_login_text', // string
                'forumdisplay_fastpost_btn_extra', // string
                'forumdisplay_fastpost_sync_method', // string
                // forumdisplay_list.htm
                'forumdisplay_filter_extra', // string
                'forumdisplay_thread', // array
                'forumdisplay_thread_subject', // array
                'forumdisplay_author', // array
                'forumdisplay_thread', // array
                'forumdisplay_author', // array
                'forumdisplay_threadlist_bottom', // string
                'forumdisplay_postbutton_bottom', // string
                // forumdisplay_sort.htm (X2.5)
                'forumdisplay_postbutton_bottom', // string
                // forumdisplay_subforum.htm (X2.5)
                'forumdisplay_subforum_extra', // array
                'forumdisplay_subforum_extra', // array
                // guide.htm
                'guide_nav_extra', // string
                'guide_top', // string
                'guide_bottom', // string
                // guide_list_row.htm (X2.5)
                'forumdisplay_thread', // array
                // index_navbar.htm
                'index_navbar', // string
                // post.htm
                'post_top', // string
                'post_middle', // string
                'post_btn_extra', // string
                'post_sync_method', // string
                'post_bottom', // string
                // post_activity.htm
                'post_activity_extra', // string
                // post_debate.htm
                'post_debate_extra', // string
                // post_editor_body.htm
                'post_editorctrl_right', // string
                'post_editorctrl_left', // string
                'post_editorctrl_top', // string
                'post_editorctrl_bottom', // string
                // post_editor_option.htm
                'post_side_top', // string
                'post_side_bottom', // string
                // post_infloat.htm
                'post_infloat_top', // string
                'post_infloat_middle', // string
                'post_infloat_btn_extra', // string
                // post_poll.htm
                'post_poll_extra', // string
                // post_reward.htm
                'post_reward_extra', // string
                // post_trade.htm
                'post_trade_extra', // string
                // topicadmin_modlayer.htm
                'forumdisplay_modlayer', // string
                'modcp_modlayer', // string
                // trade_info.htm
                'viewthread_tradeinfo_extra', // string
                // viewthread.htm
                'viewthread_top', // string
                'viewthread_postbutton_top', // string
                'viewthread_modoption', // string
                'viewthread_beginline', // string
                'viewthread_title_extra', // string
                'viewthread_title_row', // string
                'viewthread_middle', // string
                'viewthread_bottom', // string
                // viewthread_activity.htm
                'viewthread_activity_extra1', // string
                'viewthread_activity_extra2', // string
                // viewthread_fastpost.htm
                'viewthread_fastpost_side', // string
                'viewthread_fastpost_content', // string
                'viewthread_fastpost_func_extra', // string
                'viewthread_fastpost_ctrl_extra', // string
                'global_login_text', // string
                'viewthread_fastpost_btn_extra', // string
                // viewthread_from_node.htm
                'viewthread_postheader', // array
                'viewthread_postheader', // array
                'viewthread_postheader', // array
                'viewthread_endline', // array
                // viewthread_node.htm
                'viewthread_profileside', // array
                'viewthread_imicons', // array
                'viewthread_magic_user', // array
                'viewthread_avatar', // array
                'viewthread_sidetop', // array
                'viewthread_sidebottom', // array
                'viewthread_postheader', // array
                'viewthread_modaction', // string
                'viewthread_share_method', // string
                'viewthread_useraction', // string
                'viewthread_postsightmlafter', // array
                'viewthread_postfooter', // array
                'viewthread_postaction', // array
                'viewthread_magic_thread', // string
                'viewthread_magic_post', // array
                'viewthread_endline', // array
                // viewthread_node_body.htm
                'viewthread_posttop', // array
                'global_login_text', // string
                'viewthread_postbottom', // array
                // viewthread_poll.htm
                'viewthread_poll_top', // string
                'viewthread_poll_bottom', // string
                // viewthread_portal.htm
                'viewthread_useraction_prefix', // string
                'viewthread_useraction', // string
                'viewthread_side_bottom', // string
                // viewthread_trade.htm
                'viewthread_trade_extra', // array
            ),
            'group' => array( // 群组
                // group.htm
                'group_navlink', // string
                'forumdisplay_navlink', // string
                'group_navlink', // string
                'forumdisplay_navlink', // string
                'group_top', // string
                'forumdisplay_top', // string
                'group_nav_extra', // string
                'forumdisplay_nav_extra', // string
                'group_bottom', // string
                'forumdisplay_bottom', // string
                'group_side_bottom', // string
                'forumdisplay_side_bottom', // string
                // group_list.htm
                'forumdisplay_postbutton_top', // string
                'forumdisplay_filter_extra', // string
                'forumdisplay_thread', // array
                'forumdisplay_postbutton_bottom', // string
                // group_my.htm
                'my_header', // string
                'my_bottom', // string
                'my_side_top', // string
                'my_side_bottom', // string
                // group_right.htm
                'group_index_side', // string
                'group_side_top', // string
                'forumdisplay_side_top', // string
                // index.htm
                'index_header', // string
                'index_top', // string
                'index_bottom', // string
                'index_side_top', // string
                'index_side_bottom', // string
                // type.htm
                'index_top', // string
                'index_grouplist', // array
                'index_bottom', // string
                'index_side_top', // string
                'index_side_bottom', // string
            ),
            'home' => array( // 家园
                // follow_feed.htm (X2.5)
                'follow_nav_extra', // string
                'follow_top', // string
                // spacecp_avatar.htm
                'spacecp_avatar_top', // string
                'spacecp_avatar_bottom', // string
                // spacecp_blog.htm
                'spacecp_blog_top', // string
                'spacecp_blog_middle', // string
                'spacecp_blog_bottom', // string
                // spacecp_credit_base.htm
                'spacecp_credit_top', // string
                'spacecp_credit_extra', // string
                'spacecp_credit_bottom', // string
                // spacecp_credit_log.htm
                'spacecp_credit_top', // string
                'spacecp_credit_bottom', // string
                // spacecp_privacy.htm
                'spacecp_privacy_top', // string
                'spacecp_privacy_base_extra', // string
                'spacecp_privacy_feed_extra', // string
                'spacecp_privacy_bottom', // string
                // spacecp_profile.htm
                'spacecp_profile_top', // string
                'spacecp_profile_extra', // string
                'spacecp_profile_bottom', // string
                // spacecp_promotion.htm
                'spacecp_promotion_top', // string
                'spacecp_promotion_bottom', // string
                // spacecp_usergroup.htm
                'spacecp_usergroup_top', // string
                'spacecp_usergroup_bottom', // string
                'spacecp_usergroup_top', // string
                'spacecp_usergroup_bottom', // string
                'spacecp_usergroup_top', // string
                'spacecp_usergroup_bottom', // string
                // space_album_pic.htm
                'space_album_pic_top', // string
                'space_album_pic_op_extra', // string
                'space_album_pic_bottom', // string
                'space_album_pic_face_extra', // string
                // space_album_view.htm
                'space_album_op_extra', // string
                // space_blog_list.htm
                'space_blog_list_status', // array
                // space_blog_view.htm
                'space_blog_title', // string
                'space_blog_share_method', // string
                'space_blog_op_extra', // string
                'space_blog_face_extra', // string
                // space_card.htm
                'space_card_top', // string
                'space_card_baseinfo_middle', // string
                'space_card_baseinfo_bottom', // string
                'space_card_option', // string
                'space_card_magic_user', // string
                'space_card_bottom', // string
                // space_comment_li.htm
                'space_blog_comment_op', // array
                'space_blog_comment_bottom', // string
                // space_doing.htm
                'space_doing_top', // string
                'space_doing_bottom', // string
                // space_favorite.htm (X2.5)
                'space_favorite_nav_extra', // string
                // space_friend.htm
                'space_interaction_extra', // string
                // space_header.htm
                'global_usernav_extra1', // string
                'global_usernav_extra2', // string
                // space_home.htm
                'space_home_side_top', // string
                'space_home_side_bottom', // string
                'space_home_top', // string
                'space_home_navlink', // string
                'space_home_bottom', // string
                // space_magic.htm (X2.5)
                'magic_nav_extra', // string
                // space_medal.htm (X2.5)
                'medal_nav_extra', // string
                // space_menu.htm
                'space_menu_extra', // string
                // space_profile_body.htm
                'space_profile_baseinfo_top', // string
                'follow_profile_baseinfo_top', // string
                'space_profile_baseinfo_middle', // string
                'follow_profile_baseinfo_middle', // string
                'space_profile_baseinfo_bottom', // string
                'follow_profile_baseinfo_bottom', // string
                'space_profile_extrainfo', // string
                'follow_profile_extrainfo', // string
                // space_share_li.htm
                'space_share_comment_op', // array
                // space_status.htm
                'space_home_doing_sync_method', // string
                // space_wall.htm
                'space_wall_face_extra', // string
            ),
            'member' => array( // 注册/登录
                // login.htm
                'logging_side_top', // string
                'logging_top', // string
                'logging_input', // string
                'logging_method', // string
                // login_simple.htm
                'global_login_extra', // string
                // register.htm
                'register_side_top', // string
                'register_top', // string
                'register_input', // string
                'register_logging_method', // string
                'register_bottom', // string
            ),
            'portal' => array( // 门户
                // portalcp_article.htm
                'portalcp_top', // string
                'portalcp_extend', // string
                'portalcp_middle', // string
                'portalcp_bottom', // string
                // view.htm
                'view_article_top', // string
                'view_article_subtitle', // string
                'view_article_summary', // string
                'view_article_content', // string
                'view_share_method', // string
                'view_article_op_extra', // string
                'view_article_side_top', // string
                'view_article_side_bottom', // string
            ),
            'ranklist' => array( // 排行榜
                // side_left.htm
                'ranklist_nav_extra', // string
            ),
            'search' => array( // 搜索
                // album.htm
                'album_top', // string
                'album_bottom', // string
                // blog.htm
                'blog_top', // string
                'blog_bottom', // string
                // footer.htm
                'global_footer', // string
                'global_footerlink', // string
                // forum.htm
                'forum_top', // string
                'forum_bottom', // string
                // group.htm
                'group_top', // string
                'group_bottom', // string
                // header.htm
                'global_usernav_extra1', // string
                'global_usernav_extra2', // string
                // portal.htm
                'portal_top', // string
                'portal_bottom', // string
            ),
            'userapp' => array( // 应用
                // userapp_app.htm
                'userapp_app_top', // string
                'userapp_app_bottom', // string
                // userapp_index.htm
                'userapp_index_top', // string
                'userapp_index_bottom', // string
                // userapp_menu_list.htm
                'userapp_menu_top', // string
                'userapp_menu_middle', // string
                'userapp_menu_bottom', // string
            ),
            'mobile_common' => array( // 手机全局
                // footer.htm
                'global_footer_mobile', // string
                // header.htm
                'global_header_mobile', // string
            ),
            'mobile_forum' => array( // 手机论坛
                // discuz.htm
                'index_top_mobile', // string
                'index_middle_mobile', // string
                'index_bottom_mobile', // string
                // forumdisplay.htm
                'forumdisplay_top_mobile', // string
                'forumdisplay_thread_mobile', // array
                'forumdisplay_bottom_mobile', // string
                // viewthread.htm
                'viewthread_top_mobile', // string
                'viewthread_posttop_mobile', // array
                'viewthread_postbottom_mobile', // array
                'viewthread_bottom_mobile', // string
            ),
        );

        if( !isset($exists[$this->type]) ) {
            throw new \Exception(sprintf("%s with @(%s) type(%s) must be one of(%s)",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__ ,
                json_encode($this->type) ,
                join(', ', array_keys($exists) )
            ));
        }
    }
}
