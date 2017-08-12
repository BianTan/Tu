<?php

	Redux::setSection( $opt_name, array(
        'title'            => __( '基础设置', 'redux-framework-demo' ),
        'id'               => 'one',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( '主页设置', 'redux-framework-demo' ),
        'id'         => 'one-zt',
        'subsection' => true,
        'fields'     => array(
        	array(
                'id'       => 'ts',
                'type'     => 'switch',
                'title'    => __( '是否开启文章特色图片', 'redux-framework-demo' ),
                'subtitle' => __( '默认打开', 'redux-framework-demo' ),
                'default'  => true,
            ),
            array(
                'id'       => 'topd',
                'type'     => 'text',
                'title'    => __( '顶部大标题', 'redux-framework-demo' ),
                'default'  => 'WordPress博客',
            ),
            array(
                'id'       => 'topx',
                'type'     => 'text',
                'title'    => __( '顶部小标题', 'redux-framework-demo' ),
                'default'  => '欢迎光临！',
            ),
            array(
                'id'       => 'top',
                'type'     => 'radio',
                'title'    => __( '顶部显示', 'redux-framework-demo' ),
                'subtitle' => __( '颜色or图片', 'redux-framework-demo' ),
                'options'  => array(
                    '1' => '颜色',
                    '2' => '图片'
                ),
                'default'  => '1'
            ),
            array(
                'id'       => 'top-ys',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => __( '顶部背景颜色', 'redux-framework-demo' ),
                'subtitle' => __( '选择顶部背景颜色 (默认: #0288D1).', 'redux-framework-demo' ),
                'default'  => '#0288D1',
            ),
            array(
                'id'       => 'top-bg',
                'type'     => 'text',
                'title'    => __( '顶部背景图片路径', 'redux-framework-demo' ),
                'default'  => 'wp-content/themes/AI/images/bgimage.jpg',
            ),
            array(
                'id'       => 'zt-foot',
                'type'     => 'textarea',
                'title'    => __( '底部显示信息', 'redux-framework-demo' ),
                'subtitle' => __( '显示在底部的内容', 'redux-framework-demo' ),
                'default'  => '<p>本博客使用 <a href="https://creativecommons.org/licenses/by-nc-sa/3.0/deed.zh" target="_blank">CC BY-NC-SA 3.0</a> 进行许可</p>',
            )
        )
    ) );


	Redux::setSection( $opt_name, array(
        'title'      => __( '侧边栏设置', 'redux-framework-demo' ),
        'id'         => 'one-sd',
        'subsection' => true,
        'fields'     => array(
        	array(
                'id'       => 'sid',
                'type'     => 'radio',
                'title'    => __( '侧边栏个人信息背景', 'redux-framework-demo' ),
                'subtitle' => __( '颜色or图片', 'redux-framework-demo' ),
                'options'  => array(
                    '1' => '颜色',
                    '2' => '图片'
                ),
                'default'  => '1'
            ),
            array(
                'id'       => 'sid-ys',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => __( '侧边栏个人信息背景颜色', 'redux-framework-demo' ),
                'subtitle' => __( '选择侧边栏个人信息背景颜色 (默认: #0288D1).', 'redux-framework-demo' ),
                'default'  => '#0288D1',
            ),
			array(
                'id'       => 'sid-bg',
                'type'     => 'text',
                'title'    => __( '侧边栏个人信息背景图片路径', 'redux-framework-demo' ),
                'default'  => 'wp-content/themes/AI/images/bgimage.jpg',
            ),
            array(
                'id'            => 'zxpl',
                'type'          => 'slider',
                'title'         => __( '最新评论显示数量', 'redux-framework-demo' ),
                'subtitle'      => __( '左侧显示数值 (可修改数值)', 'redux-framework-demo' ),
                'desc'          => __( '最小: 1, 最大: 10, 步距: 1, 默认值: 5', 'redux-framework-demo' ),
                'default'       => 5,
                'min'           => 1,
                'step'          => 1,
                'max'           => 10,
                'display_value' => 'text'
            ),
            array(
                'id'            => 'rmwz',
                'type'          => 'slider',
                'title'         => __( '热门文章显示数量', 'redux-framework-demo' ),
                'subtitle'      => __( '左侧显示数值 (可修改数值)', 'redux-framework-demo' ),
                'desc'          => __( '最小: 1, 最大: 10, 步距: 1, 默认值: 5', 'redux-framework-demo' ),
                'default'       => 5,
                'min'           => 1,
                'step'          => 1,
                'max'           => 10,
                'display_value' => 'text'
            )
        )
    ) );

	Redux::setSection( $opt_name, array(
        'title'            => __( 'SEO设置', 'redux-framework-demo' ),
        'id'               => 'two',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-cogs'
    ) );

	Redux::setSection( $opt_name, array(
        'title'            => __( '其它设置', 'redux-framework-demo' ),
        'id'               => 'two',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-cogs'
    ) );
	
	Redux::setSection( $opt_name, array(
        'title'      => __( '通用设置', 'redux-framework-demo' ),
        'id'         => 'two-sz',
        'subsection' => true,
        'fields'     => array(
			array(
                'id'       => 'pajx',
                'type'     => 'switch',
                'title'    => __( '是否开启全局pajx', 'redux-framework-demo' ),
                'subtitle' => __( '默认打开', 'redux-framework-demo' ),
                'default'  => true,
            ),
			array(
                'id'       => 's-b',
                'type'     => 'image_select',
                'title'    => __( '网站布局', 'redux-framework-demo' ),
                'desc'     => __( '请选择网站的布局方式', 'redux-framework-demo' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    )
                ),
                'default'  => '3'
            ),
			array(
                'id'       => 'diy-css',
                'type'     => 'textarea',
                'title'    => __( 'CSS代码', 'redux-framework-demo' ),
                'subtitle' => __( '自定义CSS', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'diy-links',
                'type'     => 'textarea',
                'title'    => __( '友情链接', 'redux-framework-demo' ),
                'subtitle' => __( '链接名称|链接|显示图片|简介', 'redux-framework-demo' ),
                'default'  => '',
            ),
			
		)
	) );

?>