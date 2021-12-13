@extends('layouts.app')

@push('addon-style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

@endpush

@section('title')
    Petrokimia
@endsection

@section('content')
    <div class="page-content page-home">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-12 form-1">
                    
                    {{-- <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 841.89 595.28" style="enable-background:new 0 0 841.89 595.28;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:#E9E5E6;stroke:#EF4136;stroke-miterlimit:10;}
                            .st1{fill:#85CBA3;stroke:#F15A29;stroke-miterlimit:10;}
                            .st2{fill:#C45928;}
                            .st3{fill:#FEDE7E;stroke:#F15A29;stroke-miterlimit:10;}
                            .st4{fill:#2CAEE4;stroke:#F15A29;stroke-miterlimit:10;}
                            .st5{fill:#9AA98F;stroke:#F15A29;stroke-miterlimit:10;}
                            .st6{fill:#F37B7D;stroke:#F15A29;stroke-miterlimit:10;}
                            .st7{fill:#146734;stroke:#F15A29;stroke-miterlimit:10;}
                            .st8{fill:none;stroke:#EF4136;stroke-miterlimit:10;}
                            .st9{fill:#FBE4D6;stroke:#F15A29;stroke-miterlimit:10;}
                            .st10{fill:#F9BBBE;stroke:#F15A29;stroke-miterlimit:10;}
                            .st11{fill:#146734;stroke:#EF4136;stroke-miterlimit:10;}
                            .st12{fill:#83D5F7;stroke:#EF4136;stroke-miterlimit:10;}
                            .st13{fill:#BF2026;stroke:#EF4136;stroke-miterlimit:10;}
                            .st14{font-family:'Poppins-Medium';}
                            .st15{font-size:12px;}
                            .st16{font-size:10px;}
                            .st17{font-size:8px;}
                            .st18{font-size:10.7528px;}
                            .st19{font-size:7px;}
                            .st20{font-size:9px;}
                            .st21{font-size:11px;}
                            .st22{font-size:6px;}
                            .st23{fill:none;stroke:#000000;stroke-miterlimit:10;}
                            .st24{stroke:#000000;stroke-miterlimit:10;}
                            .st25{font-size:5px;}
                        </style>
                        <g id="Layer_1">
                            <rect x="161.32" y="435.64" class="st0" width="128.21" height="121.95"/>
                            <rect x="769.24" y="38.29" class="st1" width="60.71" height="171.76"/>
                            <rect x="707.71" y="38.29" class="st1" width="60.71" height="171.76"/>
                            <rect x="646.12" y="38.29" class="st1" width="60.71" height="171.76"/>
                            <rect x="546.71" y="36.53" class="st2" width="89.29" height="78.71"/>
                            <rect x="546.71" y="132.53" class="st1" width="42.82" height="77.53"/>
                            <rect x="589.53" y="120.82" class="st1" width="42.82" height="89.24"/>
                            <rect x="547.24" y="230.82" class="st1" width="93" height="172.06"/>
                            <rect x="640.24" y="230.82" class="st1" width="93" height="172.06"/>
                            <rect x="734.24" y="230.82" class="st1" width="93" height="172.06"/>
                            <rect x="392.35" y="34.53" class="st2" width="130" height="70.82"/>
                            <rect x="471.82" y="107.47" class="st2" width="51.82" height="30.35"/>
                            <rect x="392.94" y="143.41" class="st3" width="65.18" height="56.71"/>
                            <rect x="458.12" y="143.41" class="st3" width="65.18" height="56.71"/>
                            <rect x="392.94" y="200.12" class="st3" width="65.18" height="57.88"/>
                            <rect x="458.12" y="200.12" class="st3" width="65.18" height="57.88"/>
                            <rect x="392.94" y="257.97" class="st3" width="65.18" height="57.88"/>
                            <rect x="458.12" y="257.97" class="st3" width="65.18" height="57.88"/>
                            <rect x="392.94" y="332.82" class="st3" width="49.82" height="70.06"/>
                            <rect x="442.76" y="332.82" class="st3" width="81.82" height="30.41"/>
                            <rect x="298.5" y="332.82" class="st3" width="74.79" height="70.06"/>
                            <rect x="449.49" y="366.18" class="st4" width="75.1" height="36.71"/>
                            <rect x="547.82" y="438.91" class="st3" width="104.65" height="58.91"/>
                            <rect x="547.82" y="497.82" class="st3" width="104.65" height="58.91"/>
                            <rect x="652.47" y="438.91" class="st3" width="104.65" height="58.91"/>
                            <polygon class="st3" points="652.47,556.74 692.82,556.74 757.12,497.82 652.47,497.82"/>
                            <rect x="310.35" y="144.29" class="st1" width="21.69" height="172.59"/>
                            <rect x="332.04" y="144.29" class="st1" width="21.69" height="172.59"/>
                            <rect x="353.73" y="144.29" class="st1" width="21.69" height="172.59"/>
                            <rect x="246.76" y="69.94" class="st5" width="127" height="69.82"/>
                            <rect x="160.97" y="69.94" class="st5" width="78.32" height="69.82"/>
                            <rect x="26.13" y="69.94" class="st6" width="78.32" height="149.06"/>
                            <rect x="26.13" y="227.88" class="st6" width="78.32" height="44.88"/>
                            <rect x="26.13" y="281.65" class="st6" width="78.32" height="51.71"/>
                            <rect x="26.13" y="340.62" class="st7" width="78.32" height="53.09"/>
                            <polyline class="st8" points="42.59,403.06 113.38,403.06 113.38,70.47"/>
                            <line class="st8" x1="152.71" y1="402.53" x2="152.71" y2="69.94"/>
                            <line class="st8" x1="152.35" y1="513.47" x2="152.35" y2="436.98"/>
                            <polyline class="st8" points="113.18,513.47 113.18,436.98 41.06,436.98"/>
                            <rect x="160.6" y="278.04" class="st9" width="128.93" height="96.72"/>
                            <rect x="176.45" y="194.45" transform="matrix(0.921 0.3895 -0.3895 0.921 98.1089 -62.3236)" class="st10" width="52.59" height="32.67"/>
                            <rect x="226.85" y="217.18" transform="matrix(0.921 0.3895 -0.3895 0.921 110.9437 -80.1572)" class="st10" width="52.59" height="32.67"/>
                            <rect x="160.67" y="497.82" class="st10" width="80.53" height="59.76"/>
                            <rect x="25.03" y="444.4" class="st0" width="79.43" height="69.07"/>
                            <polygon class="st2" points="298.12,527.71 298.12,557.59 523.18,557.59 523.18,437.12 375.79,437.12"/>
                            <polygon class="st11" points="366.59,437.12 298.12,437.12 298.12,513.18"/>
                            <polygon class="st11" points="274.06,262.41 286.76,230.59 304.76,230.59 304.76,262.41"/>
                            <polygon class="st12" points="160.97,167.41 239.29,202 239.29,146 160.97,146"/>
                            <polygon class="st3" points="246.24,147 303.62,147 303.62,224.29 286.15,224.29 246.24,204.62"/>
                            <rect x="222" y="382.29" class="st13" width="67.53" height="20.59"/>
                            <polygon class="st3" points="160.6,232.32 197.82,232.32 253.76,260.56 253.76,270.35 160.6,270.35"/>
                            <rect x="160.6" y="232.32" class="st3" width="20.3" height="19.01"/>
                            <rect x="160.6" y="251.34" class="st3" width="20.3" height="19.01"/>
                            <rect x="180.9" y="247.55" class="st3" width="15.92" height="22.8"/>
                        </g>
                        <g id="Layer_3">
                            <text transform="matrix(1 0 0 1 726.7357 30.4146)" class="st14 st15">C.3</text>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 572.7517 174.9932)" class="st14 st15">C.1</text>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 610.4099 170.5283)" class="st14 st15">C.2</text>
                            <text transform="matrix(1 0 0 1 568.6714 80.2002)" class="st14 st15">Kompos</text>
                            <text transform="matrix(1 0 0 1 422.0311 73.8606)" class="st14 st16">Kandang Sapi</text>
                            <text transform="matrix(1 0 0 1 481.8048 125.876)" class="st14 st17">Gudang</text>
                            <text transform="matrix(1 0 0 1 675.4728 306.7183)" class="st14 st15">C.4</text>
                            <text transform="matrix(1 0 0 1 449.8884 229.3889)" class="st14 st15">K.4</text>
                            <text transform="matrix(1 0 0 1 675.9171 306.7189)" class="st14 st15">C.4</text>
                            <text transform="matrix(1 0 0 1 411.2705 329.3062)" class="st14 st15">K.5</text>
                            <text transform="matrix(1 0 0 1 590.7598 472.6547)" class="st14 st15">K.6</text>
                            <text transform="matrix(1 0 0 1 591.6597 531.2141)" class="st14 st15">K.7</text>
                            <text transform="matrix(1 0 0 1 695.6539 472.7384)" class="st14 st15">K.8</text>
                            <text transform="matrix(1 0 0 1 686.0098 526.3057)" class="st14 st18">K.9</text>
                            <text transform="matrix(1 0 0 1 666.1765 575.6472)" class="st14 st17">10m</text>
                            <text transform="matrix(0.7071 -0.7071 0.7071 0.7071 737.751 546.8931)" class="st14 st17">21m</text>
                            <text transform="matrix(1 0 0 1 698.8798 426.4527)" class="st14 st17">23m</text>
                            <text transform="matrix(1 0 0 1 592.5597 427.453)" class="st14 st17">23m</text>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 536.9965 474.2627)" class="st14 st17">17m</text>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 536.9967 533.1982)" class="st14 st17">17m</text>
                            <text transform="matrix(1 0 0 1 363.8073 501.2401)" class="st14 st16">Area Barak Pekerja</text>
                            <text transform="matrix(1 0 0 1 466.4081 386.0001)" class="st14 st19">Tandon Air</text>
                            <text transform="matrix(1 0 0 1 42.8433 148.5932)" class="st14 st20">Lab. Tanah</text>
                            <text transform="matrix(1 0 0 1 51.2261 254.8798)" class="st14 st20">Fitrice</text>
                            <text transform="matrix(1 0 0 1 45.2411 311.4837)" class="st14 st20">Bioproses</text>
                            <text transform="matrix(1 0 0 1 187.7102 329.3065)" class="st14 st21">Screen House</text>
                            <text transform="matrix(1 0 0 1 242.2039 395.6155)" class="st14 st20">Joglo</text>
                            <text transform="matrix(1 0 0 1 59.3557 476.7027)"><tspan x="0" y="0" class="st14 st17">EPP</tspan><tspan x="-16.52" y="9.6" class="st14 st17">Parkir Mobil</tspan></text>
                            <text transform="matrix(1 0 0 1 190.619 531.2142)" class="st14 st15">RK3</text>
                            <text transform="matrix(1 0 0 1 178.5333 108.1763)" class="st14 st19">Tabulampot</text>
                            <text transform="matrix(1 0 0 1 277.5785 110.0102)" class="st14 st20">Tanaman Buah</text>
                            <text transform="matrix(1 0 0 1 332.9589 225.2474)" class="st14 st15">B.2</text>
                            <text transform="matrix(1 0 0 1 327.142 370.6946)" class="st14 st15">K.3</text>
                            <text transform="matrix(1 0 0 1 213.7347 259.4671)" class="st14 st15">K.1</text>
                            <text transform="matrix(0.8912 0.4536 -0.4536 0.8912 190.5832 209.5683)" class="st14 st16">RK.1</text>
                            <text transform="matrix(0.8912 0.4536 -0.4536 0.8912 242.2036 231.5805)" class="st14 st16">RK.2</text>
                            <text transform="matrix(1 0 0 1 266.9115 189.4392)" class="st14 st15">K.2</text>
                            <text transform="matrix(1 -2.663284e-03 2.663284e-03 1 183.1524 164.6715)" class="st14 st17">Kolam Koi</text>
                            <text transform="matrix(1 0 0 1 408.2637 417.8756)" class="st14 st17">8m</text>
                            <text transform="matrix(1 0 0 1 327.8015 417.0197)" class="st14 st17">19m</text>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 385.8756 374.04)" class="st14 st17">21m</text>
                            <text transform="matrix(1 0 0 1 356.0431 329.3067)" class="st14 st17">6 m</text>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 387.2869 243.9409)" class="st14 st22">39 m</text>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 536.1014 357.1895)" class="st14 st17">10 m</text>
                            <text transform="matrix(1 0 0 1 414.9685 136.9236)" class="st14 st17">13 m</text>
                            <text transform="matrix(1 0 0 1 583.4118 222.1062)" class="st14 st17">18 m</text>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 560.5179 316.8101)" class="st14 st17">42 m</text>
                            <line class="st23" x1="553.18" y1="225.25" x2="633.06" y2="225.25"/>
                            <polygon class="st24" points="633.44,222.73 635.96,225.25 633.44,227.76"/>
                            <polygon class="st24" points="553.18,227.76 550.66,225.25 553.18,222.73"/>
                            <g>
                                <line class="st23" x1="552.15" y1="394.96" x2="552.15" y2="239.47"/>
                                <polygon class="st24" points="549.63,238.72 552.15,233.82 554.66,238.72"/>
                                <polygon class="st24" points="554.66,394.96 552.15,399.86 549.63,394.96"/>
                            </g>
                            <text transform="matrix(1 0 0 1 477.2014 355.8251)" class="st14 st17">15 m</text>
                            <g>
                                <line class="st23" x1="453.16" y1="359.19" x2="516.47" y2="359.19"/>
                                <polygon class="st24" points="516.77,358.23 518.76,359.19 516.77,360.14"/>
                                <polygon class="st24" points="453.16,360.14 451.17,359.19 453.16,358.23"/>
                            </g>
                            <g>
                                <line class="st23" x1="394.27" y1="408.18" x2="441.52" y2="408.18"/>
                                <polygon class="st24" points="441.75,407.22 443.24,408.18 441.75,409.14"/>
                                <polygon class="st24" points="394.27,409.14 392.79,408.18 394.27,407.22"/>
                            </g>
                            <g>
                                <line class="st23" x1="388.25" y1="401.17" x2="388.25" y2="335.39"/>
                                <polygon class="st24" points="387.3,335.08 388.25,333 389.21,335.08"/>
                                <polygon class="st24" points="389.21,401.17 388.25,403.24 387.3,401.17"/>
                            </g>
                            <g>
                                <line class="st23" x1="369.53" y1="399.22" x2="369.53" y2="337.32"/>
                                <polygon class="st24" points="368.57,337.02 369.53,335.08 370.49,337.02"/>
                                <polygon class="st24" points="370.49,399.22 369.53,401.17 368.57,399.22"/>
                            </g>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 366.7131 374.5557)" class="st14 st17">21m</text>
                            <g>
                                <line class="st23" x1="300.55" y1="407.63" x2="368.04" y2="407.63"/>
                                <polygon class="st24" points="368.36,406.26 370.49,407.63 368.36,409"/>
                                <polygon class="st24" points="300.55,409 298.42,407.63 300.55,406.26"/>
                            </g>
                            <g>
                                <line class="st23" x1="354.32" y1="320.53" x2="372.63" y2="320.53"/>
                                <polygon class="st24" points="372.72,319.58 373.29,320.53 372.72,321.49"/>
                                <polygon class="st24" points="354.32,321.49 353.74,320.53 354.32,319.58"/>
                            </g>
                            <line class="st23" x1="379.92" y1="312.05" x2="379.92" y2="145.83"/>
                            <polygon class="st24" points="379.01,145.83 379.96,144.29 380.92,145.83"/>
                            <polygon class="st24" points="380.88,312.05 379.92,313.59 378.96,312.05"/>
                            <g>
                                <line class="st23" x1="398.12" y1="196.31" x2="398.12" y2="148.13"/>
                                <polygon class="st24" points="397.16,147.9 398.12,146.38 399.08,147.9"/>
                                <polygon class="st24" points="399.08,196.31 398.12,197.82 397.16,196.31"/>
                            </g>
                            <g>
                                <line class="st23" x1="401.85" y1="139.02" x2="449.63" y2="139.02"/>
                                <polygon class="st24" points="449.86,137.92 451.37,139.02 449.86,140.12"/>
                                <polygon class="st24" points="401.85,140.12 400.34,139.02 401.85,137.92"/>
                            </g>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 406.984 179.4995)" class="st14 st17">13 m</text>
                            <g>
                                <line class="st23" x1="298.71" y1="211.88" x2="298.71" y2="157.71"/>
                                <polygon class="st24" points="297.98,157.46 298.71,155.75 299.43,157.46"/>
                                <polygon class="st24" points="299.43,211.88 298.71,213.59 297.98,211.88"/>
                            </g>
                            <text transform="matrix(-2.663275e-03 -1 1 -2.663275e-03 296.6767 187.4209)" class="st14 st25">20 m</text>
                            <g>
                                <line class="st23" x1="251.29" y1="200.7" x2="251.29" y2="157.45"/>
                                <polygon class="st24" points="250.57,157.24 251.29,155.88 252.02,157.24"/>
                                <polygon class="st24" points="252.02,200.7 251.29,202.06 250.57,200.7"/>
                            </g>
                            <text transform="matrix(-2.663275e-03 -1 1 -2.663275e-03 258.6248 185.585)" class="st14 st25">10 m</text>
                            <text transform="matrix(1 -2.642733e-03 2.642733e-03 1 268.8933 155.7641)" class="st14 st25">16 m</text>
                            <text transform="matrix(1 0 0 1 165.9083 226.6318)" class="st14 st25">5 m</text>
                            <text transform="matrix(1 -2.662833e-03 2.662833e-03 1 286.9311 217.759)" class="st14 st25">8 m</text>
                            <g>
                                <line class="st23" x1="282.07" y1="218.64" x2="256.02" y2="204.58"/>
                                <polygon class="st24" points="255.66,204.95 255.07,204.07 256.13,204.08"/>
                                <polygon class="st24" points="282.3,218.2 282.89,219.08 281.83,219.07"/>
                            </g>
                            <g>
                                <line class="st23" x1="300.15" y1="221.24" x2="288.56" y2="221.37"/>
                                <polygon class="st24" points="288.51,221.56 288.14,221.37 288.5,221.18"/>
                                <polygon class="st24" points="300.15,221.05 300.51,221.23 300.15,221.43"/>
                            </g>
                            <g>
                                <line class="st23" x1="541.58" y1="206.34" x2="541.58" y2="134.55"/>
                                <polygon class="st24" points="540.37,134.2 541.58,131.94 542.78,134.2"/>
                                <polygon class="st24" points="542.78,206.34 541.58,208.6 540.37,206.34"/>
                            </g>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 538.5716 179.7119)" class="st14 st17">14 m</text>
                            <text transform="matrix(1 0 0 1 560.9188 201.9013)" class="st14 st17">10 m</text>
                            <text transform="matrix(1 0 0 1 602.8525 201.9011)" class="st14 st17">10 m</text>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 626.3604 172.2183)" class="st14 st17">19 m</text>
                            <g>
                                <line class="st23" x1="552.83" y1="206.88" x2="584.1" y2="206.88"/>
                                <polygon class="st24" points="584.25,205.68 585.23,206.88 584.25,208.09"/>
                                <polygon class="st24" points="552.83,208.09 551.84,206.88 552.83,205.68"/>
                            </g>
                            <g>
                                <line class="st23" x1="594.7" y1="206.34" x2="625.97" y2="206.34"/>
                                <polygon class="st24" points="626.12,205.13 627.1,206.34 626.12,207.55"/>
                                <polygon class="st24" points="594.7,207.55 593.72,206.34 594.7,205.13"/>
                            </g>
                            <g>
                                <line class="st23" x1="628.31" y1="197.96" x2="628.31" y2="127.67"/>
                                <polygon class="st24" points="627.1,127.34 628.31,125.12 629.52,127.34"/>
                                <polygon class="st24" points="629.52,197.96 628.31,200.18 627.1,197.96"/>
                            </g>
                            <g>
                                <line class="st23" x1="553.64" y1="431.59" x2="646.59" y2="431.59"/>
                                <polygon class="st24" points="647.04,430.63 648.53,431.59 647.04,432.55"/>
                                <polygon class="st24" points="553.64,432.55 552.15,431.59 553.64,430.63"/>
                            </g>
                            <g>
                                <line class="st23" x1="655.91" y1="431.47" x2="754.42" y2="431.47"/>
                                <polygon class="st24" points="754.91,430.43 756.48,431.47 754.91,432.51"/>
                                <polygon class="st24" points="655.91,432.51 654.34,431.47 655.91,430.43"/>
                            </g>
                            <g>
                                <line class="st23" x1="656.3" y1="564.49" x2="689.04" y2="564.49"/>
                                <polygon class="st24" points="689.19,563.53 690.22,564.49 689.19,565.44"/>
                                <polygon class="st24" points="656.3,565.44 655.27,564.49 656.3,563.53"/>
                            </g>
                            <g>
                                <line class="st23" x1="542.24" y1="493.62" x2="542.24" y2="440.7"/>
                                <polygon class="st24" points="541.28,440.45 542.24,438.78 543.19,440.45"/>
                                <polygon class="st24" points="543.19,493.62 542.24,495.28 541.28,493.62"/>
                            </g>
                            <g>
                                <line class="st23" x1="542.24" y1="556.07" x2="542.24" y2="503.16"/>
                                <polygon class="st24" points="541.28,502.91 542.24,501.24 543.19,502.91"/>
                                <polygon class="st24" points="543.19,556.07 542.24,557.74 541.28,556.07"/>
                            </g>
                            <g>
                                <line class="st23" x1="527.76" y1="360.4" x2="527.76" y2="333.79"/>
                                <polygon class="st24" points="527.49,333.66 527.76,332.82 528.03,333.66"/>
                                <polygon class="st24" points="528.03,360.4 527.76,361.24 527.49,360.4"/>
                            </g>
                            <g>
                                <line class="st23" x1="699.89" y1="559.3" x2="758.59" y2="503.53"/>
                                <polygon class="st24" points="757.86,502.19 760.72,501.5 759.88,504.33"/>
                                <polygon class="st24" points="700.9,560.37 698.04,561.06 698.89,558.23"/>
                            </g>
                            <g>
                                <line class="st23" x1="251.21" y1="149.98" x2="299.65" y2="149.98"/>
                                <polygon class="st24" points="299.89,148.63 301.41,149.98 299.89,151.33"/>
                                <polygon class="st24" points="251.21,151.33 249.68,149.98 251.21,148.63"/>
                            </g>
                            <g>
                                <line class="st23" x1="179.29" y1="228.89" x2="162.4" y2="229.03"/>
                                <polygon class="st24" points="162.32,229.24 161.79,229.04 162.32,228.83"/>
                                <polygon class="st24" points="179.29,228.69 179.82,228.89 179.29,229.1"/>
                            </g>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 168.5782 265.6899)" class="st14 st25">5 m</text>
                            <g>
                                <line class="st23" x1="162.74" y1="254.04" x2="162.88" y2="267.99"/>
                                <polygon class="st24" points="163.09,268.06 162.89,268.5 162.68,268.06"/>
                                <polygon class="st24" points="162.54,254.05 162.74,253.6 162.95,254.04"/>
                            </g>
                            <text transform="matrix(1 0 0 1 185.2393 242.647)" class="st14 st25">4 m</text>
                            <g>
                                <line class="st23" x1="196.41" y1="244.91" x2="183.42" y2="245.05"/>
                                <polygon class="st24" points="183.36,245.26 182.95,245.05 183.35,244.84"/>
                                <polygon class="st24" points="196.41,244.7 196.82,244.9 196.42,245.11"/>
                            </g>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 205.8341 263.0151)" class="st14 st25">6 m</text>
                            <g>
                                <line class="st23" x1="199.36" y1="248.52" x2="199.51" y2="267.8"/>
                                <polygon class="st24" points="199.71,267.89 199.51,268.5 199.3,267.9"/>
                                <polygon class="st24" points="199.16,248.53 199.36,247.92 199.57,248.52"/>
                            </g>
                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 661.4526 124.2139)" class="st14 st17">43 m</text>
                            <g>
                                <line class="st23" x1="653.08" y1="198.15" x2="653.08" y2="46.66"/>
                                <polygon class="st24" points="650.57,45.93 653.08,41.16 655.6,45.93"/>
                                <polygon class="st24" points="655.6,198.15 653.08,202.93 650.57,198.15"/>
                            </g>
                            <text transform="matrix(1 0 0 1 672.0128 200.8974)" class="st14 st17">9 m</text>
                            <g>
                                <line class="st23" x1="656.9" y1="204.62" x2="701.81" y2="204.62"/>
                                <polygon class="st24" points="702.03,202.93 703.44,204.62 702.03,206.32"/>
                                <polygon class="st24" points="656.9,206.32 655.48,204.62 656.9,202.93"/>
                            </g>
                        </g>
                    </svg> --}}
                </div>

                <div class="col-md-12 col-lg-12 col-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    
                    <button onclick="$('.form-1').show(); $('.form-2').hide();"
                        class="btn-kembali btn btn-primary nav-link px-4 text-white btn-block mt-3 mb-3 form-2"
                        >Sebelumnya</button>

                    <form action="{{ route('request-store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                        

                        <div class="form-group form-1">
                            <label>Areal :</label>
                            <input required type="text" name="areal" class="form-control" readonly>
                        </div>

                        <div class="form-group form-1">
                            <label>Blok yang terpilih :</label>
                            <input required type="text" name="blok" class="form-control" readonly>
                        </div>

                        <div class="form-group form-1">
                            <label>Blok Details :</label>
                            <input required type="text" name="blok_details" class="form-control" readonly>
                        </div>

                        
                        <div class="form-group reverse_keterangan form-1">
                            <label>Panjang :</label>
                            <input required type="text" name="panjang" class="form-control" readonly>
                        </div>

                        <div class="form-group reverse_keterangan form-1">
                            <label>Lebar :</label>
                            <input required type="text" name="lebar" class="form-control" readonly>
                        </div>

                        <div class="form-group form-1" id="keterangan_tambahan">
                            <label>Keterangan:</label>
                            <input required type="text" name="keterangan_tambahan" class="form-control" readonly>
                        </div>

                        <div class="form-group form-2">
                            <label>Judul Kegiatan:</label>
                            <input required type="text" name="judul" class="form-control">
                        </div>
                        
                        <div class="row mb-2 form-1">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="datepicker_tanam">Tanggal Tanam</label>
                                
                                <div name="datepicker_tanam" id="datepicker_tanam" class="input-group date" data-date-format="yyyy-mm-dd">
                                    <input required name="tanam_date" class="form-control tanam_check" type="text" readonly="">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                                
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="datepicker_awal">Awal Pelaksanaan</label>
                                
                                <div name="datepicker_awal" id="datepicker_awal" class="input-group date" data-date-format="yyyy-mm-dd">
                                    <input required name="awal_date" class="form-control date_check" type="text" readonly="">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                                
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="datepicker_akhir">Akhir Pelaksanaan</label>
                                <div name="datepicker_akhir" id="datepicker_akhir" class="input-group date" data-date-format="yyyy-mm-dd">
                                    <input required name="akhir_date" class="form-control date_check" type="text" readonly="">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                                </div>
                            </div>

                            <div class="col-md-12" id="check_tersedia">
                                <div class="alert alert-danger tanggal-warning">
                                    Tampaknya ada yang salah dengan tanggal tanam/awal pelaksanaan/akhir pelaksanaan.
                                </div>

                                <div class="alert alert-warning pilih-warning">
                                    Silahkan pilih blok terlebih dahulu lalu set tanggalnya.
                                </div>

                                <div class="alert alert-danger booking-danger">
                                    Blok telah disetujui pada tanggal tersebut. Harap mengecek Tanggal awal pelaksanaan dan akhir pelaksanaan
                                </div>

                                <div class="alert alert-success">
                                    Lahan tersedia pada tanggal yang telah dipilih.
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-2">
                            <label>Rancangan Penelitian:</label>
                            <textarea row="5" required type="text" name="rancangan" class="form-control"></textarea>
                        </div>

                        <div class="form-group form-2">
                            <label>Tujuan Kegiatan:</label>
                            <textarea row="5" required type="text" name="tujuan" id="tujuan" class="form-control"></textarea>
                        </div>

                        {{-- <div class="form-group">
                            <label>Awal Pelaksanaan :</label>
                            <input type="text" name="awal_pelaksanaan" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Akhir Pelaksanaan :</label>
                            <input type="text" name="akhir_pelaksanaan" class="form-control">
                        </div> --}}

                        <div class="row mb-2">
                            <div class="col-md-6 form-2">
                                <div class="form-group">
                                    <label>Komoditas:</label>
                                    <select name="komoditas" id="select_komoditas" class="form-control">
                                        <option selected> Tidak Memilih </option>
                                        <option value="Padi">Padi</option>
                                        <option value="Cabai Rawit">Cabai Rawit</option>
                                        <option value="Cabai Besar">Cabai Besar</option>
                                        <option value="Cabai Keriting">Cabai Keriting</option>
                                        <option value="Bawang Merah">Bawang Merah</option>
                                        <option value="Tomat">Tomat</option>
                                        <option value="Terong">Terong</option>
                                        <option value="Sawi">Sawi</option>
                                        <option value="Jagung">Jagung</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                    <input required type="text" name="komoditas" disabled placeholder="Masukkan Nama Komoditas" id="komoditas_lainnya" class="form-control mt-2">
                                </div>
                            </div>
                            
                            <div class="col-md-6 form-2">
                                <div class="form-group">
                                    <label>Varietas:</label>
                                    <input required type="text" name="varietas" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="row mb-2">
                            <div class="col-md-12 form-2">
                                <div class="form-group">
                                    <label>Peralatan:</label>
                                    <select name="peralatan" id="select_peralatan" class="form-control">
                                        <option selected> Tidak Memilih </option>
                                        <option value="Ember">Ember</option>
                                        <option value="Polibag">Polibag</option>
                                        <option value="Pot/drum">Pot/drum</option>
                                        <option value="Mulsa">Mulsa</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-12 form-2">
                                <div class="form-group" id="jumlah_peralatan">
                                    <label>Jumlah Peratalan:</label>
                                    <input type="number" placeholder="Masukkan Jumlah Peralatan" name="jumlah_peralatan" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-2">
                            <label>Benih dan Pupuk :</label>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_benih">
                                        <label class="form-check-label" for="check_benih">
                                            Benih
                                        </label>
                                        <input disabled placeholder="Jumlah" type="text" name="jumlah_benih" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_petroganik">
                                        <label class="form-check-label" for="check_petroganik">
                                            Petroganik
                                        </label>
                                        <input disabled placeholder="Jumlah" type="text" name="jumlah_petroganik" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_phonska">
                                        <label class="form-check-label" for="check_phonska">
                                            Phonska
                                        </label>
                                        <input disabled placeholder="Jumlah" type="text" name="jumlah_phonska" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_urea">
                                        <label class="form-check-label" for="check_urea">
                                            Urea
                                        </label>
                                        <input disabled placeholder="Jumlah" type="text" name="jumlah_urea" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_za">
                                        <label class="form-check-label" for="check_za">
                                            ZA
                                        </label>
                                        <input disabled placeholder="Jumlah" type="text" name="jumlah_za" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_zk">
                                        <label class="form-check-label" for="check_zk">
                                            ZK
                                        </label>
                                        <input disabled placeholder="Jumlah" type="text" name="jumlah_zk" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_kci">
                                        <label class="form-check-label" for="check_kci">
                                            KCI
                                        </label>
                                        <input disabled placeholder="Jumlah" type="text" name="jumlah_kci" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_lain">
                                        <label class="form-check-label" for="check_lain">
                                            Lainnya
                                        </label>
                                        <input disabled type="text" placeholder="Keterangan" name="benih_lain" class="form-control mb-3">
                                        <input disabled type="number" placeholder="Jumlah" name="jumlah_lain" class="form-control mb-3">
                                </div>

                            </div>
                        </div>
                        
                        <div class="form-group form-2">
                            <label>Sarana Lain :</label>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" name="pestisida" id="check_pestisida">
                                        <label class="form-check-label" for="check_pestisida">
                                            Pestisida sesuai kebutuhan
                                        </label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" name="herbisida" id="check_herbisida">
                                        <label class="form-check-label" for="check_herbisida">
                                            Herbisida sesuai kebutuhan
                                        </label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" name="fungisida" id="check_fungisida">
                                        <label class="form-check-label" for="check_fungisida">
                                            Fungisida sesuai kebutuhan
                                        </label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" name="plastik_barrier" id="check_plastik">
                                        <label class="form-check-label" for="check_plastik">
                                            Plastik Barier
                                        </label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" name="jaring_burung" id="check_jaring">
                                        <label class="form-check-label" for="check_jaring">
                                            Jaring Burung
                                        </label>
                                </div>
                            </div>

                            <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" id="check_sarana_lain">
                                        <label class="form-check-label" for="check_sarana_lain">
                                            Lainnya
                                        </label>
                                        <input type="text" placeholder="Keterangan" name="sarana_lain" class="form-control mb-3">
                                </div>
                        </div>

                        {{-- <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Benih dan Pupuk :</label>
                                    <select name="pupuk" id="select_benih" class="form-control">
                                        <option value="Benih">Benih</option>
                                        <option value="Petroganik">Petroganik</option>
                                        <option value="Phonska">Phonska</option>
                                        <option value="Urea">Urea</option>
                                        <option value="ZA">ZA</option>
                                        <option value="ZK">ZK</option>
                                        <option value="KCI">KCI</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                    <input type="text" name="pupuk" disabled placeholder="Masukkan Nama Pupuk" id="pupuk_lainnya" class="form-control mt-2">
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group" id="jumlah_pupuk">
                                    <label>Jumlah Pupuk:</label>
                                    <input required type="number" placeholder="Masukkan Jumlah Pupuk (Kg)"  name="jumlah_pupuk" class="form-control">
                                </div>
                            </div>
                        </div> --}}
                        
                        {{-- <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sarana Lainnya</label>
                                    <select name="sarana" id="select_sarana_lain" class="form-control">
                                        <option value="Pestisida sesuai kebutuhan">Pestisida sesuai kebutuhan</option>
                                        <option value="Herbisida sesuai kebutuhan">Herbisida sesuai kebutuhan</option>
                                        <option value="Fungisida sesuai kebutuhan">Fungisida sesuai kebutuhan</option>
                                        <option value="Plastik Barier">Plastik Barier</option>
                                        <option value="Jaring Burung">Jaring Burung</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                    <input type="text" name="sarana" disabled placeholder="Masukkan Sarana Lainnya" id="sarana_lainnya" class="form-control mt-2">
                                </div>
                            </div>
                        </div> --}}


                        {{-- <div class="form-group">
                            <label>Peralatan :</label>

                            <div class="input-group mb-3">
                                <div class="form-check mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_ember">
                                        <label class="form-check-label" for="check_ember">
                                            Ember
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_ember" class="form-control">
                                </div>

                                <div class="form-check mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_polibag">
                                        <label class="form-check-label" for="check_polibag">
                                            Polibag
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_polibag" class="form-control">
                                </div>

                                <div class="form-check mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_pot">
                                        <label class="form-check-label" for="check_pot">
                                            Pot/drum
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_pot" class="form-control">
                                </div>

                                <div class="form-check mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_mulsa">
                                        <label class="form-check-label" for="check_mulsa">
                                            Mulsa
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_mulsa" class="form-control">
                                </div>

                            </div>
                        </div> --}}


                        {{-- <div class="form-group">
                            <label>Benih dan Pupuk :</label>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_benih">
                                        <label class="form-check-label" for="check_benih">
                                            Benih
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_benih" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_petroganik">
                                        <label class="form-check-label" for="check_petroganik">
                                            Petroganik
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_petroganik" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_phonska">
                                        <label class="form-check-label" for="check_phonska">
                                            Phonska
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_phonska" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_urea">
                                        <label class="form-check-label" for="check_urea">
                                            Urea
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_urea" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_za">
                                        <label class="form-check-label" for="check_za">
                                            ZA
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_za" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_zk">
                                        <label class="form-check-label" for="check_zk">
                                            ZK
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_zk" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_kci">
                                        <label class="form-check-label" for="check_kci">
                                            KCI
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_kci" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_lain">
                                        <label class="form-check-label" for="check_lain">
                                            Lainnya
                                        </label>
                                        <input disabled type="text" placeholder="Keterangan" name="benih_lain" class="form-control mb-3">
                                        <input disabled type="number" placeholder="Jumlah" name="jumlah_lain" class="form-control mb-3">
                                </div>

                            </div>
                        </div> --}}


                        {{-- <div class="form-group">
                            <label>Sarana Lain :</label>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" value="false" name="pestisida" id="check_pestisida">
                                        <label class="form-check-label" for="check_pestisida">
                                            Pestisida sesuai kebutuhan
                                        </label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" value="" name="herbisida" id="check_herbisida">
                                        <label class="form-check-label" for="check_herbisida">
                                            Herbisida sesuai kebutuhan
                                        </label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" value="" name="fungisida" id="check_fungisida">
                                        <label class="form-check-label" for="check_fungisida">
                                            Fungisida sesuai kebutuhan
                                        </label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" value="" name="plastik_barrier" id="check_plastik">
                                        <label class="form-check-label" for="check_plastik">
                                            Plastik Barier
                                        </label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" value="" name="jaring_burung" id="check_jaring">
                                        <label class="form-check-label" for="check_jaring">
                                            Jaring Burung
                                        </label>
                                </div>
                            </div>

                            <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_sarana_lain">
                                        <label class="form-check-label" for="check_sarana_lain">
                                            Lainnya
                                        </label>
                                        <input type="text" placeholder="Keterangan" name="sarana_lain" class="form-control mb-3">
                                </div>
                        </div> --}}

                      
                      
                      <button
                        type="submit"
                        class="btn btn-success nav-link px-4 text-white btn-block mt-3 mb-3 form-2"
                        >Submit</
                      >
                    </form>
                    
                    <button onclick="$('.form-1').hide(); $('.form-2').show();" id="btn-selanjutnya"
                        class="btn btn-success nav-link px-4 text-white btn-block mt-3 mb-3 form-1"
                        disabled>Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>
    
    {{-- <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Status Terpakai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p>Peneliti : Peneliti1</p>
                <p>Judul : Judul</p>
                <p>Tanggal : 1 Januari 2021 - 30 Januari 2021</p>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" disabled>Book</button>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@push('addon-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    
    <script>
        var tId;
        $('.alert').hide();
        $('.alert-warning').hide();
        $('.pilih-warning').hide();
        $('button[type="submit"]').attr('disabled','disabled');

        $('.date_check').change(function(){
            clearTimeout(tId);
            
            tId = setTimeout(function(){                 
                if ($('input[name="awal_date"]').val() > $('input[name="tanam_date"]').val() || $('input[name="akhir_date"]').val() < $('input[name="tanam_date"]').val()){
                    console.log('show');
                    $('.tanggal-warning').show();
                  } else {
                    console.log('hide');
                    $('.tanggal-warning').hide();
                  }

                if ($('input[name="awal_date"]').val() > $('input[name="akhir_date"]').val()){
                    $('.tanggal-warning').show();
                } else {
                    $('.tanggal-warning').hide();
                }

                if ($('input[name="awal_date"]').val() < $('input[name="akhir_date"]').val()){
                    axios.post('{{ route('api-date-check') }}', {
                        awal_date: $('input[name="awal_date"]').val(),
                        akhir_date : $('input[name="akhir_date"]').val(),
                        blok_details : $('input[name="blok_details"]').val(),
                    })
                    .then(function (response) {
                    
                    if (response.data == 'Tidak Tersedia'){
                        $('.booking-danger').show();
                        $('.alert-success').hide();
                        $('#btn-selanjutnya').attr('disabled','disabled');
                        $('button[type="submit"]').attr('disabled','disabled');
                    } 
                    else if (response.data == 'Pilih'){
                        $('.pilih-warning').show();
                        $('#btn-selanjutnya').attr('disabled','disabled');
                        $('button[type="submit"]').attr('disabled','disabled');
                    }
                    else {
                        $('.booking-danger').hide();
                        $('.alert-success').show();
                        $('button[type="submit"]').removeAttr('disabled');
                        $('#btn-selanjutnya').removeAttr('disabled');
                    }
                    })
                    .catch(function (error) {
                    console.log("error");
                    });
                }
                
            },750);

            
        });
    </script>
    <script>
        $(document).ready(function() {
            var d = new Date();
            n = d.getMonth() + 1;
            var awal;
            var akhir;
            // $('.lahanrect').each(console.log('test'));

            $(".lahanrect").each(function(){
                if(typeof $(this).attr("data-content") !== 'undefined'){
                    awal = $(this).attr("data-content").split(/\s+/).slice()[9].split('-')[1];;
                    akhir = $(this).attr("data-content").split(/\s+/).slice()[13].split('-')[1];;


                    if (awal == n || akhir == n){
                        $(this).css("fill", "red");
                        $(this).attr('thisMonth','true');
                    }
                }
            });

            $('.form-2').hide();
            $('#komoditas_lainnya').hide();
            $('#jumlah_peralatan').hide();
            $('#pupuk_lainnya').hide();
            $('#jumlah_pupuk').hide();
            $('#sarana_lainnya').hide();
            $('#keterangan_tambahan').hide();
            
            // $('#btn-selanjutnya').onclick = function() {
            //     $('.form-1').hide();
            //     $('.form-2').show();
            // }​;​
            

            // document.getElementById('button').onclick = function() {
            //     alert("button was clicked");
            // }​;​

            // if ($('.btn-kembali').click() == true){
            //     $('.form-1').show();
            //     $('.form-2').hide();
            //     console.log('testsetse');
            // }

            $(function () {
                $('[data-toggle="popover"]').popover({
                    trigger: "manual",
                    html: true,
                    animation: false
                })
                .on("mouseenter", function() {
                    var _this = this;
                    $(this).popover("show");
                    $(".popover").on("mouseleave", function() {
                    $(_this).popover('hide');
                    }); 
                }).on("mouseleave", function() {
                    var _this = this;
                    setTimeout(function() {
                    if (!$(".popover:hover").length) {
                        $(_this).popover("hide");
                    }
                    }, 50);
                });
            })


            $(".pop")

            var selected_panjang = parseInt(0);
            var selected_lebar = parseInt(0);
            var blok = parseInt(0);
            var blok_details = [];

            $(".lahanrect").click(function() {
                if ($(this).attr('blok') == "K9" || $(this).attr('blok') == "K2"){
                    $('#keterangan_tambahan').show();
                    $("input[name=keterangan_tambahan]").show();
                    $('.reverse_keterangan').hide();
                    $("input[name=keterangan_tambahan]").removeAttr('disabled');

                    if ($(this).attr('blok') == "K9"){
                        $("input[name=keterangan_tambahan]").val("17 m x 23 m x 21 m x 10m");
                    } else {
                        $("input[name=keterangan_tambahan]").val("10 m x 16 m x 20 m x 8m x 13 m");
                    }

                } else {
                    $("input[name=keterangan_tambahan]").attr('disabled','disabled');
                    $('#keterangan_tambahan').hide();
                    $('.reverse_keterangan').show();
                }

                if (blok == 0 || blok == $(this).attr('blok')){
                    if($(this).attr('pilih') == 'no'){
                        $(this).attr('pilih','yes');
                        $(this).css('fill', '#666');

                        // if(jQuery.inArray($(this).attr('blok'), blok )){
                        //     blok.push($(this).attr('blok'));
                        //     $("input[name=blok]").val(blok);
                        // }

                        $("input[name=areal]").val($(this).attr('areal'));
                        blok = $(this).attr('blok')
                        $("input[name=blok]").val(blok);

                        selected_panjang = parseInt(selected_panjang) + parseInt($(this).attr('panjang'));
                        selected_lebar = parseInt(selected_lebar) + parseInt($(this).attr('lebar'));
                        blok_details.push($(this).attr('name'));
                        
                        $("input[name=panjang]").val(selected_panjang);
                        $("input[name=lebar]").val(selected_lebar);
                        $("input[name=blok_details]").val(blok_details);
                        
                    } else {
                        $(this).attr("pilih","no");

                       
                        if($(this).attr('thisMonth') == 'true'){
                            $(this).css('fill','red');
                        } else {
                            $(this).attr('style','');
                        }

                        selected_panjang = parseInt(selected_panjang) - parseInt($(this).attr('panjang'));
                        selected_lebar = parseInt(selected_lebar) - parseInt($(this).attr('lebar'));


                        for( var i = 0; i < blok_details.length; i++){ 
                            if ( blok_details[i] === $(this).attr('name')) {
                                blok_details.splice(i, 1); 
                            }
                        }
                        
                        // if(jQuery.inArray($(this).attr('blok'), blok )){
                        //     for( var i = 0; i < blok_details.length; i++){ 
                        //         if ( blok[i] === $(this).attr('name')) {
                        //             blok.splice(i, 1); 
                        //         }
                        //     }
                        //     $("input[name=blok]").val(blok);
                        // }
                        
                        $("input[name=panjang]").val(selected_panjang);
                        $("input[name=lebar]").val(selected_lebar);
                        $("input[name=blok_details]").val(blok_details);
                    }
                } else {

                    selected_panjang = parseInt(0);
                    selected_lebar = parseInt(0);
                    blok = parseInt(0);
                    blok_details = [];
                    
                    $(".lahanrect").attr("pilih","no");
                    
                    $(".lahanrect").attr('style','');

                    $(this).click();
                }
                
                
                
                
            });

            $(function () {
                $("#datepicker_awal").datepicker({ 
                        format: 'yyyy-mm-dd',
                        autoclose: true, 
                        todayHighlight: true,
                }).datepicker('update', new Date());

                $("#datepicker_tanam").datepicker({ 
                        format: 'yyyy-mm-dd',
                        autoclose: true,
                }).datepicker('update', new Date());

                $("#datepicker_akhir").datepicker({ 
                        format: 'yyyy-mm-dd',
                        autoclose: true,
                }).datepicker('update', new Date());
            });

            
            $('#select_komoditas').change(function() {
                if($("#select_komoditas option:selected").text() == "Lainnya"){
                    $("#komoditas_lainnya").removeAttr('disabled');
                    $('#komoditas_lainnya').show();
                    
                } else {
                    $('#komoditas_lainnya').attr('disabled','disabled');
                    $('#komoditas_lainnya').hide();
                }
            });

            $('#select_peralatan').change(function() {
                if($("#select_peralatan option:selected").text() == "Mulsa"){
                    $('#jumlah_peralatan').attr('disabled','disabled');
                    $('#jumlah_peralatan').hide();
                } else {
                    $("#jumlah_peralatan").removeAttr('disabled');
                    $('#jumlah_peralatan').show();
                }
            });

            $('#select_benih').change(function() {
                if($("#select_benih option:selected").text() == "Lain-lain"){
                    $("#pupuk_lainnya").removeAttr('disabled');
                    $('#pupuk_lainnya').show();
                    $('#jumlah_pupuk').show();
                    
                } else {
                    $('#pupuk_lainnya').attr('disabled','disabled');
                    $('#pupuk_lainnya').hide();
                    $('#jumlah_pupuk').show();
                }
            });
            

            $('#select_sarana_lain').change(function() {
                if($("#select_sarana_lain option:selected").text() == "Lainnya"){
                    $("#sarana_lainnya").removeAttr('disabled');
                    $('#sarana_lainnya').show();
                    
                } else {
                    $('#sarana_lainnya').attr('disabled','disabled');
                    $('#sarana_lainnya').hide();
                }
            });

            $("input[id=check_ember]").click(function() {
               if ($("input[id=check_ember]").is(':checked') ){
                    $("input[name=jumlah_ember]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_ember]").attr('disabled','disabled');
                    $("input[name=jumlah_ember]").val('');
                }
            });


            $("input[id=check_polibag]").click(function() {
               if ($("input[id=check_polibag]").is(':checked') ){
                    $("input[name=jumlah_polibag]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_polibag]").attr('disabled','disabled');
                    $("input[name=jumlah_polibag]").val('');
                }
            });
            
            $("input[id=check_pot]").click(function() {
               if ($("input[id=check_pot]").is(':checked') ){
                    $("input[name=jumlah_pot]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_pot]").attr('disabled','disabled');
                    $("input[name=jumlah_pot]").val('');
                }
            });

            $("input[id=check_mulsa]").click(function() {
               if ($("input[id=check_mulsa]").is(':checked') ){
                    $("input[name=jumlah_mulsa]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_mulsa]").attr('disabled','disabled');
                    $("input[name=jumlah_mulsa]").val('');
                }
            });


            $("input[id=check_benih]").click(function() {
               if ($("input[id=check_benih]").is(':checked') ){
                    $("input[name=jumlah_benih]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_benih]").attr('disabled','disabled');
                    $("input[name=jumlah_benih]").val('');
                }
            });

            $("input[id=check_petroganik]").click(function() {
               if ($("input[id=check_petroganik]").is(':checked') ){
                    $("input[name=jumlah_petroganik]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_petroganik]").attr('disabled','disabled');
                    $("input[name=jumlah_petroganik]").val('');
                }
            });

            $("input[id=check_phonska]").click(function() {
               if ($("input[id=check_phonska]").is(':checked') ){
                    $("input[name=jumlah_phonska]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_phonska]").attr('disabled','disabled');
                    $("input[name=jumlah_phonska]").val('');
                }
            });

            $("input[id=check_urea]").click(function() {
               if ($("input[id=check_urea]").is(':checked') ){
                    $("input[name=jumlah_urea]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_urea]").attr('disabled','disabled');
                    $("input[name=jumlah_urea]").val('');
                }
            });

            $("input[id=check_za]").click(function() {
               if ($("input[id=check_za]").is(':checked') ){
                    $("input[name=jumlah_za]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_za]").attr('disabled','disabled');
                    $("input[name=jumlah_za]").val('');
                }
            });

            $("input[id=check_zk]").click(function() {
               if ($("input[id=check_zk]").is(':checked') ){
                    $("input[name=jumlah_zk]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_zk]").attr('disabled','disabled');
                    $("input[name=jumlah_zk]").val('');
                }
            });

            $("input[id=check_kci]").click(function() {
               if ($("input[id=check_kci]").is(':checked') ){
                    $("input[name=jumlah_kci]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_kci]").attr('disabled','disabled');
                    $("input[name=jumlah_kci]").val('');
                }
            });

            $("input[id=check_lain]").click(function() {
               if ($("input[id=check_lain]").is(':checked') ){
                    $("input[name=benih_lain]").removeAttr('disabled');
                    $("input[name=jumlah_lain]").removeAttr('disabled');
                } else {
                    $("input[name=benih_lain]").attr('disabled','disabled');
                    $("input[name=benih_lain]").val('');

                    $("input[name=jumlah_lain]").attr('disabled','disabled');
                    $("input[name=jumlah_lain]").val('');
                }
            });
        });

        
        
        

    </script>

    
    <script>
            CKEDITOR.replace('tujuan');
    </script>
@endpush