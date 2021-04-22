<?php
/**
 * Element Name: Accordion
 *
 * @package elements/accordion/view/template-2
 * @copyright Pluginbazar 2019
 */

$unique_id       = uniqid();
$unique_id_2     = uniqid( 'linear-gradient' );
$unique_id_3     = uniqid( 'linear-gradient-2' );
$unique_id_4     = uniqid( 'linear-gradient-3' );
$style           = eplus()->get_shortcode_atts( 'style' );
$accordions      = (array) vc_param_group_parse_atts( eplus()->get_shortcode_atts( 'accordions' ) );
$color           = eplus()->get_shortcode_atts( 'color' );
$primary_color   = eplus()->get_shortcode_atts( 'primary_color' );
$secondary_color = eplus()->get_shortcode_atts( 'secondary_color' );

if ( ! empty( $primary_color ) ) : ?>
    <style>
        #eplus-accordion<?php echo esc_attr( $unique_id ); ?> .eplus-accordion-inner {
        <?php if ( !empty( $primary_color ) ) { ?> background-color: <?php echo esc_attr( $primary_color ); } ?>;
        }
    </style>
<?php endif;
?>


<div id="eplus-accordion<?php echo esc_attr( $unique_id ); ?>"
     class="eplus-accordion eplus-accordion-<?php echo esc_attr( $style ); ?>">

    <div class="eplus-accordion-inner">

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="855.982"
             height="586.172" viewBox="0 0 855.982 586.172">
            <defs>
                <linearGradient id="<?php echo esc_attr( $unique_id_3 ); ?>" x1="0.458" y1="0.993" x2="0.519" y2="0.034"
                                gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#5352ed"></stop>
                    <stop offset="1" stop-color="#70a1ff"></stop>
                </linearGradient>
                <linearGradient id="<?php echo esc_attr( $unique_id_3 ); ?>" x1="0.458" y1="0.993" x2="0.519" y2="0.034"
                                gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#5352ed"></stop>
                    <stop offset="1" stop-color="#c7daff"></stop>
                </linearGradient>
                <linearGradient id="<?php echo esc_attr( $unique_id_4 ); ?>" y1="0.5" x2="1" y2="0.5"
                                gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#5eb7b1"></stop>
                    <stop offset="0.553" stop-color="#76c7c4"></stop>
                </linearGradient>
            </defs>
            <g transform="translate(-425 -222.414)">
                <g transform="translate(421.255 710.14) rotate(-39)" opacity="0.3">
                    <path d="M46.761,0C69.42,0,91.728,10.436,91.728,35.4c0,23.018-26.377,31.871-32.042,40.188-4.253,6.187-2.832,14.88-14.517,14.88-7.612,0-11.33-6.191-11.33-11.856,0-21.08,30.972-25.851,30.972-43.209,0-9.554-6.358-15.219-16.986-15.219-22.659,0-13.811,23.361-30.972,23.361-6.2,0-11.513-3.718-11.513-10.795C5.336,15.386,25.158,0,46.761,0Zm-.881,101.958a14.521,14.521,0,1,1-14.521,14.521A14.586,14.586,0,0,1,45.879,101.958Z"
                          transform="translate(0)" fill="url(#<?php echo esc_attr( $unique_id_3 ); ?>)"></path>
                </g>
                <g transform="translate(682.446 371.404) rotate(-39)" opacity="0.3">
                    <path d="M22.581,0C32.013,0,41.3,4.344,41.3,14.734,41.3,24.315,30.32,28,27.962,31.462c-1.77,2.575-1.179,6.194-6.043,6.194A4.69,4.69,0,0,1,17.2,32.721c0-8.775,12.892-10.76,12.892-17.986,0-3.977-2.647-6.335-7.07-6.335-9.432,0-5.749,9.724-12.892,9.724-2.579,0-4.792-1.548-4.792-4.493C5.338,6.4,13.589,0,22.581,0Zm-.367,42.44a6.044,6.044,0,1,1-6.044,6.044A6.072,6.072,0,0,1,22.214,42.44Z"
                          transform="translate(0 0)" fill="url(#<?php echo esc_attr( $unique_id_3 ); ?>)"></path>
                </g>
                <g transform="translate(1127.255 280.14) rotate(-39)" opacity="0.3">
                    <path d="M46.761,0C69.42,0,91.728,10.436,91.728,35.4c0,23.018-26.377,31.871-32.042,40.188-4.253,6.187-2.832,14.88-14.517,14.88-7.612,0-11.33-6.191-11.33-11.856,0-21.08,30.972-25.851,30.972-43.209,0-9.554-6.358-15.219-16.986-15.219-22.659,0-13.811,23.361-30.972,23.361-6.2,0-11.513-3.718-11.513-10.795C5.336,15.386,25.158,0,46.761,0Zm-.881,101.958a14.521,14.521,0,1,1-14.521,14.521A14.586,14.586,0,0,1,45.879,101.958Z"
                          transform="translate(0)" fill="url(#<?php echo esc_attr( $unique_id_3 ); ?>)"></path>
                </g>
                <g transform="translate(564.255 535.14) rotate(-39)" opacity="0.3">
                    <path d="M46.761,0C69.42,0,91.728,10.436,91.728,35.4c0,23.018-26.377,31.871-32.042,40.188-4.253,6.187-2.832,14.88-14.517,14.88-7.612,0-11.33-6.191-11.33-11.856,0-21.08,30.972-25.851,30.972-43.209,0-9.554-6.358-15.219-16.986-15.219-22.659,0-13.811,23.361-30.972,23.361-6.2,0-11.513-3.718-11.513-10.795C5.336,15.386,25.158,0,46.761,0Zm-.881,101.958a14.521,14.521,0,1,1-14.521,14.521A14.586,14.586,0,0,1,45.879,101.958Z"
                          transform="translate(0)" fill="url(#<?php echo esc_attr( $unique_id_3 ); ?>)"></path>
                </g>
                <g transform="translate(899.255 691.14) rotate(-39)" opacity="0.3">
                    <path d="M46.761,0C69.42,0,91.728,10.436,91.728,35.4c0,23.018-26.377,31.871-32.042,40.188-4.253,6.187-2.832,14.88-14.517,14.88-7.612,0-11.33-6.191-11.33-11.856,0-21.08,30.972-25.851,30.972-43.209,0-9.554-6.358-15.219-16.986-15.219-22.659,0-13.811,23.361-30.972,23.361-6.2,0-11.513-3.718-11.513-10.795C5.336,15.386,25.158,0,46.761,0Zm-.881,101.958a14.521,14.521,0,1,1-14.521,14.521A14.586,14.586,0,0,1,45.879,101.958Z"
                          transform="translate(0)" fill="url(#<?php echo esc_attr( $unique_id_3 ); ?>)"></path>
                </g>
                <g transform="translate(934.255 474.14) rotate(-39)" opacity="0.3">
                    <path
                            d="M46.761,0C69.42,0,91.728,10.436,91.728,35.4c0,23.018-26.377,31.871-32.042,40.188-4.253,6.187-2.832,14.88-14.517,14.88-7.612,0-11.33-6.191-11.33-11.856,0-21.08,30.972-25.851,30.972-43.209,0-9.554-6.358-15.219-16.986-15.219-22.659,0-13.811,23.361-30.972,23.361-6.2,0-11.513-3.718-11.513-10.795C5.336,15.386,25.158,0,46.761,0Zm-.881,101.958a14.521,14.521,0,1,1-14.521,14.521A14.586,14.586,0,0,1,45.879,101.958Z"
                            transform="translate(0)" fill="url(#<?php echo esc_attr( $unique_id_3 ); ?>)"></path>
                </g>
                <g transform="translate(446.85 281.14) rotate(-39)" opacity="0.3">
                    <path d="M46.761,0C69.42,0,91.728,10.436,91.728,35.4c0,23.018-26.377,31.871-32.042,40.188-4.253,6.187-2.832,14.88-14.517,14.88-7.612,0-11.33-6.191-11.33-11.856,0-21.08,30.972-25.851,30.972-43.209,0-9.554-6.358-15.219-16.986-15.219-22.659,0-13.811,23.361-30.972,23.361-6.2,0-11.513-3.718-11.513-10.795C5.336,15.386,25.158,0,46.761,0Zm-.881,101.958a14.521,14.521,0,1,1-14.521,14.521A14.586,14.586,0,0,1,45.879,101.958Z"
                          transform="translate(0)" fill="url(#<?php echo esc_attr( $unique_id_3 ); ?>)"></path>
                </g>
                <g transform="translate(21.308 14)">
                    <g transform="translate(403.692 402)">
                        <path d="M379.5,182.2h-46.02a24.908,24.908,0,0,0-9.209-9.154c-17.229-9.729-34.605-4.954-44.458,6.516a47.622,47.622,0,0,0-58.691-32.795,57.683,57.683,0,0,0-100.148,10.2c-12.526-5.26-27.755-5.33-43.036,2.571a38.628,38.628,0,0,0-16.272,15.937H32.692"
                              transform="translate(-32.692 -122.22)" fill="none"
                              stroke="<?php echo esc_attr( ! empty( $secondary_color ) ? $secondary_color : '#9057ff' ); ?>"
                              stroke-miterlimit="10"
                              stroke-width="1"></path>
                        <line x2="142.136" transform="translate(6.704 62.915)" fill="none"
                              stroke="<?php echo esc_attr( ! empty( $secondary_color ) ? $secondary_color : '#9057ff' ); ?>"
                              stroke-miterlimit="10" stroke-width="1"></line>
                        <line x2="169.625" transform="translate(30.17 69.62)" fill="none"
                              stroke="<?php echo esc_attr( ! empty( $secondary_color ) ? $secondary_color : '#9057ff' ); ?>"
                              stroke-miterlimit="10" stroke-width="1"></line>
                        <line x2="149.5" transform="translate(229.36 66.938)" fill="none"
                              stroke="<?php echo esc_attr( ! empty( $secondary_color ) ? $secondary_color : '#9057ff' ); ?>"
                              stroke-miterlimit="10" stroke-width="1"></line>
                        <line x2="169.625" transform="translate(177.735 86.381)" fill="none"
                              stroke="<?php echo esc_attr( ! empty( $secondary_color ) ? $secondary_color : '#9057ff' ); ?>"
                              stroke-miterlimit="10" stroke-width="1"></line>
                        <line x2="169.625" transform="translate(140.608 95.097)" fill="none"
                              stroke="<?php echo esc_attr( ! empty( $secondary_color ) ? $secondary_color : '#9057ff' ); ?>"
                              stroke-miterlimit="10" stroke-width="1"></line>
                    </g>
                    <line x2="388.729" transform="translate(407.963 594.711)" fill="none"
                          stroke="<?php echo esc_attr( ! empty( $secondary_color ) ? $secondary_color : '#9057ff' ); ?>"
                          stroke-miterlimit="10" stroke-width="1"></line>
                    <text transform="translate(599.619 589.181)"
                          fill="<?php echo esc_attr( ! empty( $secondary_color ) ? $secondary_color : '#9057ff' ); ?>"
                          font-size="164"
                          font-family="SegoeUI, Segoe UI" letter-spacing="0.05em">
                        <tspan x="-158.146" y="0">FAQ</tspan>
                    </text>
                    <g transform="translate(450.202 415.433)">
                        <path d="M116.131,222.417l-2.393,9.155s-1.135,2.554-.071,3.76,4.184,5.462,4.184,5.462l4.043-1.631c.275-.171-3.377-6.866-3.05-7.093l2.4-7.017-5.113-2.635"
                              transform="translate(-85.885 -143.968)" fill="#dba17b"></path>
                        <path d="M120.526,237.076s3.05,5.178,3.476,6.81.993,3.263.141,3.972-5.532,0-6.892-3.794a9.007,9.007,0,0,0-3.606-4.15c-2.057-1.276-2.7-2.624-2.27-3.972a8.576,8.576,0,0,1,1.844-2.766,6.138,6.138,0,0,0,1.561,4.043,22.811,22.811,0,0,1,1.915,2.837s-1.064-2.554,1.348-3.618c1.729-.763,2.7,1.773,2.7,1.773l-.213-1.135"
                              transform="translate(-85.722 -144.861)" fill="#fffaf0"></path>
                        <path d="M100.479,222.417l2.393,9.155s1.134,2.554.071,3.76-4.185,5.462-4.185,5.462l-4.043-1.631c-.275-.171,3.377-6.866,3.05-7.093l-2.4-7.017,5.113-2.635"
                              transform="translate(-84.348 -143.968)" fill="#dba17b"></path>
                        <path d="M95.664,237.076s-3.05,5.178-3.475,6.81-.993,3.263-.142,3.972,5.533,0,6.893-3.794a9.006,9.006,0,0,1,3.6-4.15c2.057-1.276,2.7-2.624,2.27-3.972a8.576,8.576,0,0,0-1.844-2.766,6.134,6.134,0,0,1-1.56,4.043,22.848,22.848,0,0,0-1.916,2.837s1.064-2.554-1.347-3.618c-1.729-.763-2.7,1.773-2.7,1.773l.213-1.135"
                              transform="translate(-84.092 -144.861)" fill="#fffaf0"></path>
                        <path d="M94.388,152.374s1.106-2.238,13.677-1.519c7.6.434,10.855.515,12.212,2.388,3.674,5.071-2.909,34.477-2.909,34.477l-21.71-.435S89.829,158.887,94.388,152.374Z"
                              transform="translate(-84.178 -138.017)" fill="#f5bf42"></path>
                        <path d="M0,0H6.326a0,0,0,0,1,0,0V9.243a3.094,3.094,0,0,1-3.094,3.094H3.094A3.094,3.094,0,0,1,0,9.243V0A0,0,0,0,1,0,0Z"
                              transform="translate(19.664 5.165)" fill="#dba17b"></path>
                        <g transform="translate(16.7 1.037)">
                            <path d="M112.735,143.363c0,3.532-2.125,7.427-4.746,7.427s-4.745-3.895-4.745-7.427S105.37,138,107.99,138,112.735,139.83,112.735,143.363Z"
                                  transform="translate(-101.757 -137.999)" fill="#eeb791"></path>
                            <ellipse cx="1.224" cy="1.697" rx="1.224" ry="1.697" transform="translate(0 3.908)"
                                     fill="#eeb791"></ellipse>
                            <ellipse cx="1.224" cy="1.697" rx="1.224" ry="1.697" transform="translate(9.595 3.908)"
                                     fill="#eeb791"></ellipse>
                        </g>
                        <path d="M102.958,141.813s.039,3.144.323,2.363.851-4.539,1.489-4.539,5.888,1.064,7.873.425,1.986-3.263-.213-3.192c-3.93.127-6.951-.284-8.227.922S103.131,139.592,102.958,141.813Z"
                              transform="translate(-85.034 -136.868)" fill="#213c5f"></path>
                        <path d="M112.669,139.536c.072.851.214,5.959.568,5.036a10.96,10.96,0,0,0,.568-4.611C113.659,139.055,112.6,138.756,112.669,139.536Z"
                              transform="translate(-85.839 -137.053)" fill="#213c5f"></path>
                        <path d="M95.686,185.455s-3.873,8.043-2.359,13.015,23.6,4.514,24.684,1.815c2.458-6.138-.614-14.468-.614-14.468Z"
                              transform="translate(-84.205 -140.901)" fill="#fffaf0"></path>
                        <path d="M93.572,191.616s-12.294,5.979-9.836,10.14,11.426,23.13,11.426,23.13l5.6-.78s-4.167-15.351-5.113-20.647l8.7-1.44S102.084,189.724,93.572,191.616Z"
                              transform="translate(-83.412 -141.396)" fill="#e65227"></path>
                        <path d="M120.023,191.41s13.241,7.3,10.781,11.465-10.823,21.994-10.823,21.994l-5.347-.851s4.253-14.712,5.2-20.009l-11.728-1.629S111.511,189.519,120.023,191.41Z"
                              transform="translate(-85.461 -141.379)" fill="#e65227"></path>
                        <path d="M87.009,165.373S84.683,178.4,85.147,181.5s9.617,14.579,9.617,14.579l3.256-1.4L92.9,179.642l1.086-11.787Z"
                              transform="translate(-83.551 -139.234)" fill="#dba17b"></path>
                        <path d="M128.165,164.526s2.326,13.029,1.862,16.13-9.616,14.579-9.616,14.579l-3.257-1.4,5.118-15.044-1.086-11.787Z"
                              transform="translate(-86.212 -139.164)" fill="#dba17b"></path>
                        <g transform="translate(7.488 39.882)">
                            <rect width="29.652" height="19.903" rx="1.372" fill="#d7ecec"></rect>
                            <circle cx="1.896" cy="1.896" r="1.896" transform="translate(12.304 7.353)"
                                    fill="#f5f0e0"></circle>
                        </g>
                        <path d="M94.884,151.814s-5.644,1.737-9.335,12.374l8.738,2.415S96.187,154.419,94.884,151.814Z"
                              transform="translate(-83.589 -138.109)" fill="#f5bf42"></path>
                        <path d="M121.353,152.583a23.824,23.824,0,0,1,8.44,12.537l-8.546,2.758S110.281,152.8,121.353,152.583Z"
                              transform="translate(-86.15 -138.173)" fill="#f5bf42"></path>
                    </g>
                    <g transform="translate(688.11 504.798)">
                        <path d="M378.929,280.367s2.367-5.629,3.774-6.91a2.924,2.924,0,0,1,4.094-.192c.9.96-.319,8.893-1.535,9.725S378.929,284.974,378.929,280.367Z"
                              transform="translate(-347.121 -237.854)" fill="#fffaf0"></path>
                        <path d="M352.681,292.647s-3.943,11.549,1.262,14.92,16.074.936,18.064-.749-.173-14.369-.173-14.369Z"
                              transform="translate(-344.823 -239.508)" fill="#33577f"></path>
                        <path d="M405,300.177l6.076,5.29c3.146.273,3.294-1.722,3.141-3.945L408.1,295.4Z"
                              transform="translate(-349.284 -239.752)" fill="#c6825d"></path>
                        <path d="M395.663,329.751l5.922,5.462c3.137.363,3.342-1.628,3.253-3.854l-5.943-6.3Z"
                              transform="translate(-348.509 -242.214)" fill="#c6825d"></path>
                        <path d="M386.189,274.688c-1.689.292-2.071-2.147-2.071-2.147a23.143,23.143,0,0,1,.525-5.017c.562-2.248,1.264,1.685,1.264,1.685s2.529-7.585,3.091-5.478a11.388,11.388,0,0,1,0,6.883C388.565,272.2,387.878,274.4,386.189,274.688Z"
                              transform="translate(-347.551 -237.094)" fill="#c6825d"></path>
                        <path d="M372.263,277.749l-.322,13.717-21.7,5.466s-7.133-32.443-3.522-38.634c2.359-4.043,8.867-3.183,14.657-3.2,6.67-.021,9.983,2.554,12,5.508,1.479,2.169,12.141,18.118,9.129,21.958C379.242,286.721,375.073,282.6,372.263,277.749Z"
                              transform="translate(-344.363 -236.402)" fill="#fffaf0"></path>
                        <g transform="translate(11.613 18.042)">
                            <path d="M365.65,255.511c0,1.435-1.082,5.8-3.242,5.8s-5.5-4.451-5.5-5.886S365.65,254.076,365.65,255.511Z"
                                  transform="translate(-356.906 -254.391)" fill="#b27052"></path>
                        </g>
                        <path d="M3.064,0H3.2A3.064,3.064,0,0,1,6.265,3.064v9.152a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V3.064A3.064,3.064,0,0,1,3.064,0Z"
                              transform="translate(19.404 21.347) rotate(180)" fill="#b27052"></path>
                        <g transform="translate(11.285 0)">
                            <path d="M357.877,242.679c.426,3.472,5.856,7.726,8.168,6.548,1.089-.555,1.586-4.222,1.159-7.694s-2.734-5.015-5.31-4.7S357.451,239.209,357.877,242.679Z"
                                  transform="translate(-356.654 -234.889)" fill="#c6825d"></path>
                            <ellipse cx="1.212" cy="1.68" rx="1.212" ry="1.68"
                                     transform="translate(0 6.489) rotate(-7.002)" fill="#eeb791"></ellipse>
                            <path d="M360.507,239.89s4.984,1.047,7.445-1.265c3.375-3.169.181-5.972-7.726-1.827-2.364,1.24-3.09,1.545-3.512,2.81s1.686,6.6,2.669,6.6S357.838,240.591,360.507,239.89Z"
                                  transform="translate(-356.557 -234.716)" fill="#f5bf42"></path>
                        </g>
                        <rect width="5.082" height="10.545" transform="translate(7.98 6.057) rotate(-9.367)"
                              fill="#213c5f"></rect>
                        <path d="M353.71,253s-.679-5.481.366-6.108,4.907-2.714,4.907-1.565.418,4.072,0,4.281a20.565,20.565,0,0,0-2.14,2.976Z"
                              transform="translate(-345.01 -235.569)" fill="#c6825d"></path>
                        <path d="M352.943,253.516l3.132-.417s3.033,15.746,2.564,18.878-.774,9.872-5.556,10.51c-3.243.433-8.061-6.355-8.7-13.776-.761-8.83,1.7-12.133,4.778-12.753,4.788-.963,2.5,12.422,2.5,12.422Z"
                              transform="translate(-344.242 -236.242)" fill="#fffaf0"></path>
                        <path d="M349.138,279.672c1.236,1.667,1.955,2.553,4,2.762,4.374.445,5.782-4.762,5.905-10.457.135-6.26-2.564-18.878-2.564-18.878l-3.132.417-1.895,19.506"
                              transform="translate(-344.648 -236.242)" fill="none" stroke="#eae5df"
                              stroke-miterlimit="10" stroke-width="0.5"></path>
                        <path d="M369.371,297.3s17.495-20.078,21.241-18.767l20.04,19.15-5.63,4.862-14.666-11.642s-12.252,16.766-13.563,14.331S369.371,297.3,369.371,297.3Z"
                              transform="translate(-346.327 -238.348)" fill="#33577f"></path>
                        <path d="M412.552,311.014s-2.983-5.1-2.151-6.473c.4-.652,1.424.633,2.335.116,1-.567,1.866-2.906,1.866-2.906s4.436.7,7.448-1.411c4.145-2.9,6.6-.6,6.6-.6a19.535,19.535,0,0,1-4.858,4.684c-2.764,2.011-5.15,4.567-7.439,6.221S412.552,311.014,412.552,311.014Z"
                              transform="translate(-349.72 -240.041)"
                              fill="url(#<?php echo esc_attr( $unique_id_4 ); ?>)"></path>
                        <path d="M405.673,331.314s-1.372-1.762-3.14.44c-.68.848-.381,1.569-.51,2.124-.2.886-1.717.546-1.717.546s2.463,5.261,5.139,4.541c1.363-.367,3.533,1.306,4.981,1.543,4.576.753,8.806-3.757,5.115-5.411a27.678,27.678,0,0,0-5.482-2.036A15.965,15.965,0,0,1,405.673,331.314Z"
                              transform="translate(-348.895 -242.678)"
                              fill="url(#<?php echo esc_attr( $unique_id_4 ); ?>)"></path>
                        <path d="M373.264,263.642a66.411,66.411,0,0,1,1.264,15.031"
                              transform="translate(-346.65 -237.117)" fill="none" stroke="#eae5df"
                              stroke-miterlimit="10" stroke-width="0.5"></path>
                        <path d="M382.883,273.53s-2.654,1.809-2.714,4.04" transform="translate(-347.223 -237.937)"
                              fill="none" stroke="#eae5df" stroke-miterlimit="10" stroke-width="0.5"></path>
                        <path d="M362.147,298.517s19.292,6.182,20.041,8.8,16.719,18,16.719,18l-5.118,5.118-20.872-18.393s-13.917.163-19.817-4.894C350.454,304.887,353.344,298.143,362.147,298.517Z"
                              transform="translate(-344.899 -240.01)" fill="#416f99"></path>
                    </g>
                    <g transform="translate(486.402 485.684)">
                        <path d="M165.551,259.55s-2.367-5.63-3.774-6.91a2.923,2.923,0,0,0-4.094-.192c-.9.959.319,8.892,1.535,9.724S165.551,264.156,165.551,259.55Z"
                              transform="translate(-126.076 -217.012)"
                              fill="url(#<?php echo esc_attr( $unique_id_4 ); ?>)"></path>
                        <path d="M144.715,322.543l-3.588,7.212c-2.8,1.456-3.7-.331-4.412-2.443l3.31-8Z"
                              transform="translate(-124.361 -222.623)" fill="#c6825d"></path>
                        <path d="M162.647,314.675l4.594,6.617c-.072,3.157-2.072,3.086-4.265,2.691l-5.421-6.755Z"
                              transform="translate(-126.091 -222.238)" fill="#c6825d"></path>
                        <path d="M158.542,253.871c1.689.291,2.071-2.148,2.071-2.148a23.144,23.144,0,0,0-.525-5.017c-.561-2.248-1.264,1.686-1.264,1.686s-2.529-7.586-3.091-5.479a11.391,11.391,0,0,0,0,6.884C156.165,251.383,156.852,253.58,158.542,253.871Z"
                              transform="translate(-125.895 -216.252)" fill="#c6825d"></path>
                        <path d="M169.578,256.882,170.6,268.6l18.937,1.024s8.577-25.081,5.064-31.328c-1.734-3.085-7.445-4.663-13.234-4.681-6.67-.021-10.881,3.164-12.9,6.118-1.479,2.169-12.141,18.117-9.129,21.958C162.6,265.854,166.768,261.729,169.578,256.882Z"
                              transform="translate(-126.194 -215.511)"
                              fill="url(#<?php echo esc_attr( $unique_id_4 ); ?>)"></path>
                        <path d="M0,0H6.265a0,0,0,0,1,0,0V9.152A3.064,3.064,0,0,1,3.2,12.216H3.064A3.064,3.064,0,0,1,0,9.152V0A0,0,0,0,1,0,0Z"
                              transform="translate(51.88 9.155)" fill="#b27052"></path>
                        <g transform="translate(48.065)">
                            <path d="M186.48,221.862c-.426,3.471-5.856,7.726-8.168,6.548-1.089-.555-1.586-4.223-1.159-7.694s2.735-5.015,5.31-4.7S186.907,218.391,186.48,221.862Z"
                                  transform="translate(-175.769 -214.047)" fill="#c6825d"></path>
                            <ellipse cx="1.68" cy="1.212" rx="1.68" ry="1.212"
                                     transform="translate(9.118 9.553) rotate(-82.998)" fill="#eeb791"></ellipse>
                            <path d="M183.642,219.07s-5.057,1.124-7.445-1.265,3.933-3.933,3.933-3.933a4.384,4.384,0,0,0,3.793,2.107c2.669,0,3.09,1.545,3.512,2.81s-1.686,6.6-2.669,6.6S186.311,219.772,183.642,219.07Z"
                                  transform="translate(-175.658 -213.872)" fill="#213c5f"></path>
                        </g>
                        <path d="M142.884,333.367s-.7-5.871-2.187-6.461c-.71-.282-.755,1.364-1.793,1.5-1.138.149-3.242-1.192-3.242-1.192s-3.118,3.231-6.791,3.366c-5.056.186-5.629,3.5-5.629,3.5a19.527,19.527,0,0,0,6.7.806c3.418-.063,6.863.536,9.685.476S142.884,333.367,142.884,333.367Z"
                              transform="translate(-123.243 -223.25)" fill="#f5bf42"></path>
                        <path d="M170.946,322.463s-4.662-3.636-6.129-2.995c-.7.306.437,1.5-.2,2.329-.7.914-3.129,1.463-3.129,1.463s.1,4.49-2.391,7.194c-3.426,3.722-1.473,6.465-1.473,6.465a19.526,19.526,0,0,0,5.289-4.192c2.361-2.471,5.212-4.5,7.156-6.544S170.946,322.463,170.946,322.463Z"
                              transform="translate(-126.051 -222.629)" fill="#f5bf42"></path>
                        <path d="M171.835,242.825a66.411,66.411,0,0,0-1.264,15.031"
                              transform="translate(-127.165 -216.275)" fill="none" stroke="#279b9b"
                              stroke-miterlimit="10" stroke-width="0.5"></path>
                        <path d="M162.091,252.712s2.654,1.809,2.714,4.04" transform="translate(-126.467 -217.095)"
                              fill="none" stroke="#279b9b" stroke-miterlimit="10" stroke-width="0.5"></path>
                        <path d="M169.383,278.542s-18.084,12.625-20.814,17.914-10.919,23.2-10.919,23.2l6.142,2.217,11.26-17.06,21.838-18.084Z"
                              transform="translate(-124.439 -219.239)" fill="#eae5df"></path>
                        <path d="M177.677,287.875l-23.032,7.848,9.042,17.573-6.141,3.242s-16.425-17.952-14.331-23.885c2.047-5.8,23.373-14.5,23.373-14.5l2.7-6.381,18.937,1.024S186.891,285.829,177.677,287.875Z"
                              transform="translate(-124.885 -218.677)" fill="#fffaf0"></path>
                        <path d="M193.077,236.963c-3.884-.582-10.962,16.973-10.962,16.973s-9.384-6.483-11.942-6.483a2.267,2.267,0,0,0-2.389,2.9c.171.682,10.066,12.283,16.378,12.283s10.211-10.9,11.336-13.487C197.113,245.437,196.305,237.447,193.077,236.963Z"
                              transform="translate(-126.934 -215.787)"
                              fill="url(#<?php echo esc_attr( $unique_id_4 ); ?>)"></path>
                        <path d="M185.256,247.88c-1.818,3.68-3.141,6.963-3.141,6.963s-9.384-6.483-11.942-6.483a2.267,2.267,0,0,0-2.389,2.9c.171.682,10.066,12.283,16.378,12.283s10.211-10.9,11.336-13.487"
                              transform="translate(-126.934 -216.694)" fill="none" stroke="#279b9b"
                              stroke-miterlimit="10" stroke-width="0.5"></path>
                        <rect width="3.595" height="10.578" transform="translate(27.643 24.741) rotate(-16.914)"
                              fill="#213c5f"></rect>
                        <ellipse cx="0.938" cy="3.412" rx="0.938" ry="3.412"
                                 transform="translate(27.145 27.753) rotate(-21.103)" fill="#c6825d"></ellipse>
                        <path d="M169.279,248.838s-3.632-4.761-5.488-4.761-4.358-.484-3.631.161a12.186,12.186,0,0,0,2.986,1.372s-.646,2.179,0,2.582,3.147,1.937,4.2,1.937S169.279,248.838,169.279,248.838Z"
                              transform="translate(-126.296 -216.364)" fill="#c6825d"></path>
                    </g>
                    <g transform="translate(591.05 489.4)">
                        <path d="M254.181,317.929l-.308,10.06,5.012-.028.928-10.616Z"
                              transform="translate(-239.104 -226.175)" fill="#dba17b"></path>
                        <path d="M249.325,235.675s1.088-2.2,13.46-1.5c7.478.427,10.683.507,12.018,2.35,3.617,4.99-3.164,36.188-3.164,36.188l-20.9-.442S244.838,242.085,249.325,235.675Z"
                              transform="translate(-238.587 -219.261)" fill="#e65227"></path>
                        <path d="M249.81,235.124s-5.555,1.709-9.187,12.178l8.582,1.614S251.092,237.688,249.81,235.124Z"
                              transform="translate(-238.005 -219.351)" fill="#e65227"></path>
                        <path d="M275.645,235.643a23.445,23.445,0,0,1,8.306,12.338l-8.76,2.137S264.748,235.857,275.645,235.643Z"
                              transform="translate(-240.499 -219.394)" fill="#e65227"></path>
                        <path d="M0,0H6.226a0,0,0,0,1,0,0V9.1a3.045,3.045,0,0,1-3.045,3.045H3.045A3.045,3.045,0,0,1,0,9.1V0A0,0,0,0,1,0,0Z"
                              transform="translate(20.041 6.165)" fill="#dba17b"></path>
                        <g transform="translate(17.124 2.102)">
                            <path d="M267.378,225.5c0,3.475-2.091,7.309-4.669,7.309s-4.67-3.833-4.67-7.309,2.091-5.279,4.67-5.279S267.378,222.019,267.378,225.5Z"
                                  transform="translate(-256.574 -220.216)" fill="#eeb791"></path>
                            <ellipse cx="1.205" cy="1.67" rx="1.205" ry="1.67" transform="translate(0 3.846)"
                                     fill="#eeb791"></ellipse>
                            <ellipse cx="1.205" cy="1.67" rx="1.205" ry="1.67" transform="translate(9.443 3.846)"
                                     fill="#eeb791"></ellipse>
                        </g>
                        <rect width="10.662" height="13.163" rx="0.699" transform="translate(17.676 23.249)"
                              fill="#d7ecec"></rect>
                        <path d="M284.181,249.222s4.1,9.869,3.351,12.289-8.469-11.076-8.469-11.076Z"
                              transform="translate(-241.195 -220.521)" fill="#dba17b"></path>
                        <path d="M274.291,248.129c1.117-2.606,1.862-3.537,3.165-2.978s12.612,15.4,9.447,18.2c-2,1.763-5.352-1.256-7.958-12.612,0,0-2.42-1.489-2.42-2.978,0-.745-.651-.651-1.3.28C274.864,248.547,274.291,248.129,274.291,248.129Z"
                              transform="translate(-240.799 -220.17)" fill="#eeb791"></path>
                        <path d="M272.441,272.012s-3.71,1.913-11.068,1.8-10.991-1.8-10.991-1.8-5,9.517-.326,14.054l3.165,8.377-.26,20.477,6.589.186s2.606-15.265,3.351-21.966c.138-1.236,1.453-9.288.558-11.169,1.952-.314,8.8,3.937,9.214,3.434C277.7,279.347,272.441,272.012,272.441,272.012Z"
                              transform="translate(-238.622 -222.413)" fill="#33577f"></path>
                        <path d="M275.564,276.161s14.876,3.173,15.062,8.013c.121,3.162-22.361,3.317-24.394-.786S271.283,275.773,275.564,276.161Z"
                              transform="translate(-240.1 -222.755)" fill="#33577f"></path>
                        <path d="M259.051,288.15c-6.324.258-5.771,4.468-5.771,12.1s.293,15.256.293,15.256l6.409.939S268.172,287.777,259.051,288.15Z"
                              transform="translate(-239.054 -223.752)" fill="#416f99"></path>
                        <rect width="8.359" height="3.209" transform="translate(13.567 90.852)" fill="#416f99"></rect>
                        <path d="M244.361,281.552a7.133,7.133,0,0,0-2.513-.558c-1.257,0-2.374.14-2.374,4.747s-1.469,7.546-1.675,10.331c-.279,3.77,1.35,6.908,2.792,6.7a4.59,4.59,0,0,0,4.049-3.071C245.059,298.027,244.361,281.552,244.361,281.552Z"
                              transform="translate(-237.768 -223.158)" fill="#fffaf0"></path>
                        <path d="M243.346,281.6s4.7-.508,6.611,1.84a4.477,4.477,0,0,1,.232,5.007s-3.492,3.624-3.631,7.812c-.076,2.269-2.3,6-4.049,5.585-2.373-.558-2.1-7.734-1.117-9.353C243.765,288.58,240.693,282.576,243.346,281.6Z"
                              transform="translate(-238.009 -223.204)" fill="#2b445a"></path>
                        <path d="M258.671,283.589l-8.006.019c-2.533,1.854-1.337,3.443.232,5.007l8.588.577Z"
                              transform="translate(-238.716 -223.373)" fill="#dba17b"></path>
                        <path d="M290.207,285.665c-.809,8.7-29.415,3.909-29.415,3.909l.164-6.515a86.19,86.19,0,0,1,18.076-2.42C287.578,280.639,290.536,282.128,290.207,285.665Z"
                              transform="translate(-239.679 -223.129)" fill="#416f99"></path>
                        <rect width="3.351" height="9.121" transform="translate(18.321 58.627)" fill="#416f99"></rect>
                        <path d="M260.435,222.149s0,1.815,3.071,2.443,3.657,2.62,3.657,2.62a8.686,8.686,0,0,0,.88-4.085c-.259-1.553-.912-4.055-2.959-4.873a3.827,3.827,0,0,0-4.44.964,2.292,2.292,0,0,0-2.582,1.465c-1.753,3.946.209,6.143.209,6.143S258.062,222.568,260.435,222.149Z"
                              transform="translate(-239.392 -217.924)" fill="#7c6942"></path>
                        <path d="M259.415,331.272l-1.091,1.92c-1.43-.685-5.087,1.395-5.087,1.395a24.2,24.2,0,0,0-2.637,3.691,3.574,3.574,0,0,0,.151,3.617c.452.377,2.057,2.644,6.178,1.431,3.842-1.13,1.84-6.778,2.788-8.513A3.839,3.839,0,0,0,259.415,331.272Z"
                              transform="translate(-238.799 -227.331)" fill="#fffaf0"></path>
                        <path d="M258.96,326.753c-.527-.678-1.281-.15-1.206-.678.179-1.25-1.055-1.13-2.184-1.13s-.829,1.355-.829,1.355c-.164.134-1.054-.3-1.281.377a48.364,48.364,0,0,1-.527,6.329c-.452,2.335-1.484,3.562-1.808,4.822-.678,2.636,6.013,4.656,7.534.226.727-2.116-.418-2.821.679-5.2C260.063,331.282,258.96,326.753,258.96,326.753Z"
                              transform="translate(-238.872 -226.806)" fill="#2b445a"></path>
                    </g>
                    <path d="M242.1,248.775s-3.09,18.543,1.619,18.837,12.068-12.951,12.068-12.951,3.385.736,3.385.294-.441-5.74-.441-5.74l-3.532,1.325-7.5,6.622.735-7.5Z"
                          transform="translate(353.055 269.081)" fill="#eeb791"></path>
                </g>
                <g transform="translate(678.856 678.073) rotate(-39)" opacity="0.3">
                    <path d="M22.329,0c9.294,0,18.443,4.28,18.443,14.518,0,9.441-10.819,13.072-13.142,16.483-1.744,2.538-1.162,6.1-5.954,6.1a4.621,4.621,0,0,1-4.647-4.863c0-8.646,12.7-10.6,12.7-17.722,0-3.919-2.608-6.242-6.967-6.242-9.294,0-5.665,9.581-12.7,9.581-2.541,0-4.722-1.525-4.722-4.427C5.338,6.311,13.468,0,22.329,0Zm-.362,41.818a5.956,5.956,0,1,1-5.956,5.956A5.983,5.983,0,0,1,21.967,41.818Z"
                          transform="translate(0)" fill="url(#<?php echo esc_attr( $unique_id_3 ); ?>)"></path>
                </g>
            </g>
        </svg>


        <div class="eplus-accordion-wrap">
			<?php foreach ( $accordions as $index => $accordion ) :
				$title = isset( $accordion['title'] ) && ! empty( $accordion['title'] ) ? $accordion['title'] : '';
				$content = isset( $accordion['content'] ) && ! empty( $accordion['content'] ) ? $accordion['content'] : '';
				?>

                <div class="eplus-accordion-item">
                    <h3 class="eplus-accordion-title">
						<?php echo esc_html( $title ); ?>
                        <div class="toggle-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g transform="translate(-1495 -355)">
                                    <path d="M10.858,24C16.574,24,25.148,8.842,22.29,3.789S2.284-1.263-.574,3.789,5.142,24,10.858,24Z"
                                          transform="translate(1496.142 355)"
                                          fill="<?php echo esc_attr( ! empty( $primary_color ) ? $primary_color : '#5f27cd' ); ?>"></path>
                                    <g transform="translate(1512 364) rotate(90)">
                                        <path d="M10.281,10a1.216,1.216,0,0,1-.845-.341,1.249,1.249,0,0,1-.044-1.752l2.743-2.916L9.4,2.1A1.249,1.249,0,0,1,9.434.344a1.217,1.217,0,0,1,1.733.039l3.548,3.749a1.25,1.25,0,0,1,0,1.711L11.17,9.615A1.219,1.219,0,0,1,10.281,10Z"
                                              transform="translate(-9.055 0)"
                                              fill="<?php echo esc_attr( ! empty( $color ) ? $color : '#fff' ); ?>"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </h3>
                    <div class="eplus-accordion-content"><?php echo wp_kses_post( $content ); ?></div>
                </div>
			<?php endforeach; ?>
        </div>
    </div>
</div>