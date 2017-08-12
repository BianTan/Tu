<?php
    /**
     * The template for the panel header area.
     * Override this template by specifying the path where it is stored (templates_path) in your Redux config.
     *
     * @author      Redux Framework
     * @package     ReduxFramework/Templates
     * @version:    3.5.4.18
     */

    $tip_title = __( '开发者模式已启用', 'redux-framework' );

    if ( $this->parent->dev_mode_forced ) {
        $is_debug     = false;
        $is_localhost = false;

        $debug_bit = '';
        if ( Redux_Helpers::isWpDebug() ) {
            $is_debug  = true;
            $debug_bit = __( 'WP_DEBUG 已启用', 'redux-framework' );
        }

        $localhost_bit = '';
        if ( Redux_Helpers::isLocalHost() ) {
            $is_localhost  = true;
            $localhost_bit = __( 'wp处于本地搭建的环境中', 'redux-framework' );
        }

        $conjunction_bit = '';
        if ( $is_localhost && $is_debug ) {
            $conjunction_bit = ' ' . __( 'and', 'redux-framework' ) . ' ';
        }

        $tip_msg = __( '这是自动开启的，因为', 'redux-framework' ) . ' ' . $debug_bit . $conjunction_bit . $localhost_bit . '.';
    } else {
        $tip_msg = __( '如果您不是开发人员，您的主题/插件作者与开发模式启用。直接联系原作者修复它.', 'redux-framework' );
    }

?>
<div id="redux-header">
    <?php if ( ! empty( $this->parent->args['display_name'] ) ) { ?>
        <div class="display_header">

            <?php if ( isset( $this->parent->args['dev_mode'] ) && $this->parent->args['dev_mode'] ) { ?>
                <div class="redux-dev-mode-notice-container redux-dev-qtip"
                     qtip-title="<?php echo esc_attr( $tip_title ); ?>"
                     qtip-content="<?php echo esc_attr( $tip_msg ); ?>">
                    <span
                        class="redux-dev-mode-notice"><?php _e( '开发者模式已开启', 'redux-framework' ); ?></span>
                </div>
            <?php } elseif (isset($this->parent->args['forced_dev_mode_off']) && $this->parent->args['forced_dev_mode_off'] == true ) { ?>
                <?php $tip_title    = 'The "forced_dev_mode_off" argument has been set to true.'; ?>
                <?php $tip_msg      = '此参数启用时不可用支持选项。在部署项目之前，还需要将此参数切换为false。如果您是该产品的用户，您正在看到此消息，请与此主题/插件的作者联系.'; ?>
                <div class="redux-dev-mode-notice-container redux-dev-qtip" 
                     qtip-title="<?php echo esc_attr( $tip_title ); ?>"
                     qtip-content="<?php echo esc_attr( $tip_msg ); ?>">
                    <span
                        class="redux-dev-mode-notice" style="background-color: #FF001D;"><?php _e( 'FORCED DEV MODE OFF ENABLED', 'redux-framework' ); ?></span>
                </div>
            
            <?php } ?>

            <h2><?php echo wp_kses_post( $this->parent->args['display_name'] ); ?></h2>

            <?php if ( ! empty( $this->parent->args['display_version'] ) ) { ?>
                <span><?php echo wp_kses_post( $this->parent->args['display_version'] ); ?></span>
            <?php } ?>

        </div>
    <?php } ?>

    <div class="clear"></div>
</div>