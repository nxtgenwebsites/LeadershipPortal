<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Leadership Portal</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/colors.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/icons/material/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
      <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css?hcode=c11e6e3cfefb406e8ce8d99fa8368d33" rel="stylesheet" type="text/css">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css?hcode=c11e6e3cfefb406e8ce8d99fa8368d33" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/layout_1/css/tui-chart.min.css') }}">
    <!-- <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css"> -->

    

     <style>
        * {
        box-sizing: content-box;
        }

        .raters-icon {
            margin-right: 16px !important;
        }

        .report-tabs .nav-link.active{
            color:#fff !important;
            background-color:#3f51b5 !important;
        }

        section {
        font-family: 'Baskerville Old Face', serif;
        margin-top: 15px;
        }

        .page-attr {
        border: 1px solid #7AA7CF;
        padding: 0;
        padding-bottom: 30px;
        background: #FFFFFF;
        }

        .text-gray {
        color: #808080;
        }

        .text-truncate {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        }

        .table-secondary {
        background: #e4dfec;
        }

        table.action-plan.table-bordered th, table.action-plan.table-bordered td {
        border: 2px solid #fff !important;

        }

        table td {
        text-align: center;
        }

        table.action-plan {
        table-layout: fixed;
        width: 100%;
        }

        .action-plan th, .action-plan td {
        height: 80px;
        width: 33.3%;
        text-align: center;
        display: table-cell;
        vertical-align: middle !important;
        }

        .bg-gray {
        background: #ddd;
        }

        .bg-blu-odd {
        background: #dce6f1;
        }

        .bg-blu-even {
        background: #c5d9f1;
        }

        .open-res {
        color: #5276a1;
        }

        /* -----------Page 1------------ */
        .p1-main-grid {
        display: grid;
        grid-template-rows: 4fr 5fr;
        /* padding: 30px; */
        }

        .top {
        display: grid;
        grid-template-rows: repeat(3, auto);
        color: #2E75B5;
        font-weight: 500;
        /* border: 1px solid #7AA7CF; */
        padding-top: 10px;
        }

        .top .p1-360 {
        font-size: 72px;
        }

        .top .p1-feedback {
        font-size: 96px;
        text-transform: uppercase;
        font-weight: 500;
        }

        .bottom {
        border-top: 1px solid #7AA7CF;
        }

        .bottom p {
        font-size: 28px;
        }

        .bottom .p1-summary {
        color: #777;
        text-align: left;
        width: 180px;
        }

        .p1-summary p {
        font-size: 18px;
        margin: 0 30px 0;
        }

        .bottom .p1-report-bdr {
        border: 1px solid #7AA7CF;
        border-radius: 10px;
        padding: 10px;
        }

        .bottom .p1-date {
        font-size: 24px;
        }

        p.p1-report {
        font-size: 54px;
        }

        .p1-name {
        color: #C00;
        }

        .p1-summary {
        margin: 0 auto;
        }

        /* -----------Page 2------------ */
        .p2-main-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(4, auto);
        grid-template-areas:
            "p2-logo p2-logo p2-logo p2-logo p2-logo p2-logo"
            "p2-welcome p2-welcome p2-welcome p2-welcome p2-welcome p2-welcome"
            "p2-raters p2-raters p2-raters p2-raters p2-raters p2-raters"
            "p2-arrow p2-arrow p2-arrow p2-arrow p2-arrow p2-arrow"
            ;
        /* padding: 30px; */
        }

        .p2-logo {
        grid-area: p2-logo;
        grid-column: 5 / 7;
        display: grid;
        grid-template-columns: 1fr 1fr;
        }

        .p2-logo h4 {
        font-size: 16px;
        color: rgb(128,128,128);
        justify-self: self-end;
        }

        .p2-logo span {
        display: block;
        }

        .p2-welcome {
        grid-area: p2-welcome;
        grid-column: 1 / 7;
        color: rgb(128,128,128);
        }

        .p2-welcome .p2-box {
        background: rgb(220,230,242);
        border: 3px solid rgb(56,93,188);
        border-radius: 10px;
        color: rgb(49,133,156);
        padding: 10px 10px 0;
        }

        .p2-raters {
        grid-area: p2-raters;
        display: grid;
        grid-template-columns: 1fr 1fr;
        }

        .p2-raters .p2-lhs img {
        width: 70%;
        align-self: center;
        }

        .p2-raters .p2-text {
        font-size: 16px;
        line-height: 24px;
        }

        .p2-raters .p2-text span {
        color: #C00;
        font-weight: 600;
        }

        .p2-arrow {
        grid-area: p2-area;
        grid-column: 2 / 7;
        }

        /* -----------Page 3------------ */
        .p3-main-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(3, auto);
        grid-template-areas:
            "p3-logo p3-logo p3-logo p3-logo p3-logo p3-logo"
            "p3-model p3-model p3-model p3-model p3-model p3-model"
            "p3-intelli p3-intelli p3-intelli  p3-intelli  p3-intelli  p3-intelli"
            ;
        /* padding: 30px; */
        }

        .p3-logo {
        grid-area: p3-logo;
        grid-column: 5 / 7;
        display: grid;
        grid-template-columns: 1fr 1fr;
        }

        .p3-logo h4 {
        font-size: 16px;
        color: rgb(128,128,128);
        justify-self: self-end;
        }

        .p3-logo span {
        display: block;
        }

        .p3-model {
        grid-area: p3-model;
        grid-column: 1 / 7;
        color: rgb(128,128,128);
        }

        .p3-intelli {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-area: p3-intelli;
        }

        .p3-intelli aside {
        width: 70%;
        margin: 0 auto;
        }

        .p3-intelli .p3-title {
        display: inline-block;
        font-size: 16px;
        color: #FFF;
        border-radius: 10px;
        }

        .p3-title.coi {
        background: rgb(47,85,151);
        }
        .p3-title.emi {
        background: rgb(192,0,0);
        }
        .p3-title.ldi {
        background: rgb(127,96,0);
        }
        .p3-title.betm {
        background: rgb(197,90,17);
        }

        .p3-intelli .p3-text {
        font-size: 18px;
        line-height: 24px;
        color: rgb(128, 128, 128);
        }

        .p3-intelli aside:nth-child(1) .p3-text span {
        color: rgb(47,85,151);
        font-weight: 500;
        }

        .p3-intelli aside:nth-child(2) .p3-text span {
        color: rgb(192,0,0);
        font-weight: 500;
        }

        .p3-intelli aside:nth-child(3) .p3-text span {
        color: rgb(127,96,0);
        font-weight: 500;
        }

        .p3-intelli aside:nth-child(4) .p3-text span {
        color: rgb(197,90,17);
        font-weight: 500;
        }

        .p3-intelli aside img {
        width: 100%;
        }

        /* -----------Page 4------------ */
        .p4-main-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        padding: 30px 45px;
        }

        .p4-heading {
        color: rgb(128, 128, 128);
        }

        .p4-main-grid .chart {
        margin-left: -25px;
        }

        .p4-logo {
        grid-column: 5 / 7;
        display: grid;
        grid-template-columns: 1fr 1fr;
        }

        .p4-logo h4 {
        font-size: 16px;
        color: rgb(128,128,128);
        justify-self: self-end;
        }

        .p4-logo span {
        display: block;
        }

        .p4-self-summary {
        grid-column: 1 / 7;
        }

        .p4-heading-top, .p4-heading-bottom {
        grid-column: 1 / 7;
        justify-self: flex-end;
        }

        .p4-heading-top span, .p4-heading-bottom span {
        font-size: small;
        padding: 0 30px 0;
        }

        .p4-bars {
        display: grid;
        grid-template-columns: 2fr 3fr;
        grid-column: 1 / 7;
        }

        .p4-pq {
        font-size: 15px;
        font-weight: 500;
        background: #CCC;
        padding: 6px;
        margin-right: 0px !important;
        /* margin: 45px 0; */
        z-index: 5;
        }

        .p4-pq span, .p4-cq span, .p4-eq span, .p4-lq span, .p4-desc-span {
        float: right;
        }

        .cog-text, .em-text, .ld-text {
        margin-top: 20px;
        z-index: 5;
        width: 94%;
        }

        .cog-text .p4-cq-desc, .em-text .p4-cq-desc,
        .ld-text .p4-cq-desc {
            margin-right: -18px;
            margin-bottom: 5px;
        }

        h5.p4-cq-desc  span p { margin-bottom: 5px; }

        .cog-text h3, .ld-text h3, .em-text h3 {
        font-size: 15px;
        font-weight: 500;
        background: #CCC;
        padding: 6px;
        margin-right: -27px;
        z-index: 5;
        }

        h5 span p {
        font-size: small;
        }

        .cog-text h5, .em-text h5, .ld-text h5 {
        font-size: 15px;

        }

        .cog-text p, .em-text p {
        margin-bottom: 0;
        }

        /* -----------Page 6------------ */
        .tri-main-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        /* padding: 30px 45px; */
        }

        .tri-heading {
        color: rgb(128, 128, 128);
        }

        .tri-logo {
        grid-column: 5 / 7;
        display: grid;
        grid-template-columns: 1fr 1fr;
        }

        .tri-logo h4 {
        font-size: 16px;
        color: rgb(128,128,128);
        justify-self: self-end;
        }

        .tri-logo span {
        display: block;
        }

        .self-summary {
        grid-column: 1 / 7;
        padding: 10px 30px;
        font-size: 1.25rem;
        }

        .tri-main-grid .tri-chart {
        grid-column: 1 / 7;
        }

        .tri-main-grid .summary-box {
        grid-column: 1 / 7;
        background:#ccc;
        border-radius: 20px;
        width: 60vw;
        padding: 15px;
        }

        .tri-chart .tri-box {
        position: relative;
        display: inline-block;
        }

        .tri-box .tri-text {
        position: absolute;
        z-index: 999;
        margin: 0 auto;
        left: 0;
        right: 0;
        text-align: center;
        top: 30%;
        width: 64%;
        }

        .tri-self-cq {
        font-size: 3rem;
        margin-top: 10px;
        font-weight: bold;
        color: #dce6f2;
        }

        .tri-self-bt {
        font-size: 3rem;
        font-weight: bold;
        color: #c45a11;
        padding-top: 150px;
        }

        .tri-self-eq {
        color: #fcd5b5;
        font-weight: bold;
        font-size: 3rem;
        margin-top: 75%;
        margin-left: 77%;
        }

        .tri-self-lq {
        color: #7f6000;
        font-weight: bold;
        font-size: 3rem;
        margin-top: 75%;
        margin-right: 77%;
        }

        /* -----------Page 8 (Pie)------------ */
        .pie-main-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        /* padding: 30px 45px; */
        }

        .pie-heading {
        color: rgb(128, 128, 128);
        }

        .pie-logo {
        grid-column: 5 / 7;
        display: grid;
        grid-template-columns: 1fr 1fr;
        }

        .pie-logo h4 {
        font-size: 16px;
        color: rgb(128,128,128);
        justify-self: self-end;
        }

        .pie-logo span {
        display: block;
        }

        .pie-main-grid .self-summary, .pie-main-grid .pie-cq-body {
        grid-column: 1 / 7;
        padding: 10px 30px;
        }

        .pie-main-grid .pie-bottom-legend {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-column: 1 / 7;
        padding: 10px 30px;
        }

        .pie-main-grid #p8-chart, .pie-main-grid #p9-chart,
        .pie-main-grid #p10-chart {
        grid-column: 1  / 7;
        height:1000px;
        width:100%;
        margin: 0;
        }

        .pie-eq-body {
        justify-self: flex-end;
        }

        .pie-lq {
        font-size: 40px;
        color: rgb(128,96,0);
        }

        .pie-eq {
        font-size: 40px;
        color: rgb(139, 0, 0);
        }

        h2.pie-cq {
        font-size: 40px;
        color: rgb(36,64,98);
        }

        /* -----------Page 11------------ */
        .p11-main-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        padding: 30px 15px;
        }

        .pg-logo {
        grid-column: 5 / 7;
        display: grid;
        grid-template-columns: 1fr 1fr;
        }

        .pg-logo h4 {
        font-size: 16px;
        color: rgb(128,128,128);
        justify-self: self-end;
        }

        .pg-logo span {
        display: block;
        }

        .p11-main-grid .quad-anal {
        grid-column: 1 / 7;
        }

        .p11-main-grid .hr-arrow {
        grid-column: 2 / 7;
        }

        .p11-main-grid .quad-md {
        grid-column: 1 / 7;
        display: grid;
        grid-template-columns: 1fr 4fr 2fr;
        }

        .quad-md img {
        justify-self: flex-end;
        }

        .quad-bt {
        grid-column: 1 / 7;
        display: grid;
        grid-template-columns: repeat(3, auto);
        align-items: center;
        }

        .quad-bt .mv-right {
        justify-self: end;
        }

        /* -----------Page 12------------ */
        .p12-main-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        padding: 30px 15px;
        }

        .p12-main-grid .pg-logo {
        grid-column: 5 / 7;
        display: grid;
        grid-template-columns: 1fr 1fr;
        }

        .p12-main-grid .pg-logo h4 {
        font-size: 16px;
        color: rgb(128,128,128);
        justify-self: self-end;
        }

        .p12-main-grid .pg-logo span {
        display: block;
        }

        .p12-main-grid .p12-heading, .total-pq, .tbl-total-pq,
        .total-celq, .tbl-total-celq, .total-bt, .tbl-total-bt {
        grid-column: 1 / 7;
        }

        .linear-summary {
        grid-column: 1 / 7;
        background:#DCE6F2;
        border-radius: 30px;
        border: 3px solid rgb(56,93,188);
        padding: 30px;
        margin: 0 60px;
        }

        .linear-summary p {
        color: rgb(36,64,98);
        }

        /* -----------Page 13------------ */
        .p13-main-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        padding: 30px 15px;
        transform: rotate(-90deg);
        }

        .p13-main-grid .pg-logo {
        grid-column: 5 / 7;
        display: grid;
        grid-template-columns: 1fr 1fr;
        }

        .p13-main-grid .pg-logo h4 {
        font-size: 16px;
        color: rgb(128,128,128);
        justify-self: self-end;
        }

        .p13-main-grid .pg-logo span {
        display: block;
        }

        .p13-main-grid .sub-linear, .pqi-balance {
        grid-column: 1 / 7;
        }

        .p13-main-grid .tb-subscales {
        grid-column: 1 / 7;
        display: grid;
        grid-template-columns: auto 5fr;
        }

        .tb-subscales .labels {
        padding-top: 110px;
        }

        .rot-labels {
        color:white;
        font-size: 1rem;
        transform: rotate(-90deg);
        margin: 150px 0 34px;
        padding: 10px 30px;
        }

        .cognitive {
        background-color: #366092;
        }

        .text-cognitive {
        color: #366092;
        font-size: 1rem;
        }

        .emotional {
        background-color: #c00000;
        }

        .text-emotional {
        color: #c00000;
        font-size: 1rem;
        }
        .leadership {
        background-color: #403151;
        }

        .text-leadership {
        color: #403151;
        font-size: 1rem;
        }

        .pqi-subscales {
        margin-left: -60px;
        }

        .pqi-subscales table td {
        text-align: left;
        }

        .pqi-subscales table thead th {
        background: none;
        font-size: 1.2rem;
        font-weight: 500;
        text-align: center;
        height: 60px;
        }

        .pqi-subscales table tbody tr.no-raters td{
        text-align: center;
        font-size: 1rem;
        padding: 3px;
        background: #e4dfec;
        }

        .pqi-subscales table.table-bordered,
        .pqi-subscales table.table-bordered th,
        .pqi-subscales table.table-bordered td {
        border: 1px solid #000;
        }

        /* -----------Page 17------------ */
        .pqi-balance h3 {
        font-size: 1.25rem;
        }

        #p17-chart-1 {
        margin-left: -25px;
        }

        .bt-table-heading, .pqi-table-heading, .lq-table-heading,
        .em-table-heading, .ins-table-heading, .ex-table-heading,
        .ep-table-heading, .rc-table-heading, .eq-table-heading,
        .sa-table-heading, .sr-table-heading, .ir-table-heading,
        .ey-table-heading, .mo-table-heading,
        .cq-table-heading, .ft-table-heading,
        .ps-table-heading, .ct-table-heading,
        .dm-table-heading, .exp-table-heading {
        display: table-cell;
        vertical-align: middle !important;
        }

        .bt-table-heading, .pqi-table-heading, .lq-table-heading {
        color: #c65911;
        }

        .eq-table-heading {
        color: #f00;
        }

        .pqi-table-heading, .pqi-table td:nth-child(2) {
        color: #548235;
        }

        .bt-table td:nth-child(2) {
        color: #c65911;
        }

        .cq-table-heading, .ft-table-heading,
        .ps-table-heading, .ct-table-heading,
        .dm-table-heading, .exp-table-heading {
        color: #244062;
        }

        .bt-table td:nth-child(1), .pqi-table td:nth-child(1), .lq-table td:nth-child(1),
        .em-table td:nth-child(1), .ep-table td:nth-child(1), .ex-table td:nth-child(1),
        .ins-table td:nth-child(1), .rc-table td:nth-child(1),
        .eq-table td:nth-child(1), .sa-table td:nth-child(1),
        .sr-table td:nth-child(1), .ir-table td:nth-child(1),
        .ey-table td:nth-child(1), .mo-table td:nth-child(1),
        .cq-table td:nth-child(1), .ft-table td:nth-child(1),
        .ps-table td:nth-child(1), .ct-table td:nth-child(1),
        .dm-table td:nth-child(1), .exp-table td:nth-child(1) {
        font-weight: 600;
        }

        table.bt-table, table.pqi-table, table.lq-table, table.ep-table,
        table.em-table, table.ex-table, table.rc-table, table.ins-table,
        table.eq-table, table.sa-table, table.sr-table, table.ir-table,
        table.ey-table, table.mo-table, table.cq-table, table.ft-table,
        table.ps-table, table.ct-table, table.dm-table, table.exp-table {
        background: #d9d9d9;
        z-index: 5;
        }

        table.ex-table, table.rc-table, table.em-table,
        table.sa-table, table.ir-table, table.mo-table,
        table.ft-table, table.ct-table, table.exp-table {
        background: #fff;
        }

        table.ep-table, table.ins-table {
        background: #ffe699;
        }

        table.sr-table, table.ey-table {
        background: #fcc;
        }

        table.ps-table, table.dm-table {
        background: #dce6f1;
        }

        table.bt-table.table-bordered, table.pqi-table.table-bordered,
        table.cq-table.table-bordered, table.ft-table.table-bordered,
        table.ps-table.table-bordered, table.ct-table.table-bordered,
        table.dm-table.table-bordered, table.exp-table.table-bordered,
        table.eq-table.table-bordered, table.sa-table.table-bordered,
        table.sr-table.table-bordered, table.ir-table.table-bordered,
        table.ey-table.table-bordered, table.mo-table.table-bordered,
        table.lq-table.table-bordered, table.em-table.table-bordered,
        table.ins-table.table-bordered, table.ex-table.table-bordered,
        table.ep-table.table-bordered, table.rc-table.table-bordered {
        border-top: 1px solid #555;
        height: 88%;
        }

        table.bt-table.table-bordered td, table.pqi-table.table-bordered td,
        table.lq-table.table-bordered td, table.em-table.table-bordered td,
        table.ins-table.table-bordered td, table.ex-table.table-bordered td,
        table.ep-table.table-bordered td, table.rc-table.table-bordered td,
        table.eq-table.table-bordered td, table.sa-table.table-bordered td,
        table.sr-table.table-bordered td, table.ir-table.table-bordered td,
        table.ey-table.table-bordered td, table.mo-table.table-bordered td {
        border: 1px solid #555;
        padding: 8px;
        }

        table.pqi-table.table-bordered td, table.ft-table.table-bordered td,
        table.ps-table.table-bordered td, table.ct-table.table-bordered td,
        table.dm-table.table-bordered td, table.exp-table.table-bordered td {
        border: 1px solid #555;
        padding: 9px;
        }

        table.cq-table.table-bordered td {
            border: 1px solid #555;
            padding: 10px;
        }

        table.bt-table.table-bordered tr td:nth-child(2), table.pqi-table.table-bordered tr td:nth-child(2) {
        border-bottom: 5px double #555;
        padding: 7px;
        }

        table.bt-table.table-bordered td.rm-bdr-bottom {
        border-bottom: none;
        }

        /* -----------Page 18------------ */
        .p4-main-grid .percent-ranking {
        grid-column: 2 / 6; */
        width: 100%;
        height: 600px;
        }

        table.action-plan th {
        background: #538dd5;
        font-size: 1.25rem;
        }
    </style>
</head>

<body>
@php
	$areaOfEnrichment 		 = $selfSummary->low_range;
	$areaOfEnrichmentBeg 	 = $selfSummary->low_range_beg;
	$areaOfEnrichmentEnd 	 = $selfSummary->low_range_end;
	$effectiveFunctioning    = $selfSummary->med_range;
	$effectiveFunctioningBeg = $selfSummary->med_range_beg;
	$effectiveFunctioningEnd = $selfSummary->med_range_end;
	$enhancedSkill    		 = $selfSummary->high_range;
	$enhancedSkillBeg    	 = $selfSummary->high_range_beg;
	$enhancedSkillEnd    	 = $selfSummary->high_range_end;
	$increments   			 = $selfSummary->increment_range;

	$self_pq = $selfSummary->PQ;
	$self_cq = $selfSummary->CQ;
	$self_focused_thinking = $selfSummary->focused_thinking;
	$self_problem_solving = $selfSummary->problem_solving;
	$self_critical_thinking = $selfSummary->critical_thinking;
	$self_decision_making = $selfSummary->decision_making;
	$self_explanation = $selfSummary->explanation;
	$self_eq = $selfSummary->EQ;
	$self_self_awareness = $selfSummary->self_awareness;
	$self_self_regulation = $selfSummary->self_regulation;
	$self_interpersonal_relationships = $selfSummary->interpersonal_relationships;
	$self_empathy = $selfSummary->empathy;
	$self_motivation = $selfSummary->motivation;
	$self_lq = $selfSummary->LQ;
	$self_embodiment = $selfSummary->embodiment;
	$self_inspiration = $selfSummary->inspiration;
	$self_excellence = $selfSummary->excellence;
	$self_empowerment = $selfSummary->empowerment;
	$self_recognition = $selfSummary->recognition;
	$self_bt = $selfSummary->BT;

	$self_avg_focused_thinking = $self_avg->focused_thinking*2;
	$self_avg_problem_solving = $self_avg->problem_solving*2;
	$self_avg_critical_thinking = $self_avg->critical_thinking*2;
	$self_avg_decision_making = $self_avg->decision_making*2;
	$self_avg_explanation = $self_avg->explanation*2;
	$self_avg_self_awareness = $self_avg->self_awareness*2;
	$self_avg_self_regulation = $self_avg->self_regulation*2;
	$self_avg_interpersonal_relationships = $self_avg->interpersonal_relationships*2;
	$self_avg_empathy = $self_avg->empathy*2;
	$self_avg_motivation = $self_avg->motivation*2;
	$self_avg_embodiment = $self_avg->embodiment*2;
	$self_avg_inspiration = $self_avg->inspiration*2;
	$self_avg_excellence = $self_avg->excellence*2;
	$self_avg_empowerment = $self_avg->empowerment*2;
	$self_avg_recognition = $self_avg->recognition*2;



	$low_range = $selfSummary->low_range;
	$low_range_beg = $selfSummary->low_range_beg;
	$low_range_end = $selfSummary->low_range_end;


	$med_range = $selfSummary->med_range;
	$med_range_beg = $selfSummary->med_range_beg;
	$med_range_end = $selfSummary->med_range_end;


	$high_range = $selfSummary->high_range;
	$high_range_beg = $selfSummary->high_range_beg;
	$high_range_end = $selfSummary->high_range_end;


	$_360_pq = round($_360->PQ,1);
	$_360_cq = round($_360->CQ,1);
	$_360_focused_thinking = round($_360->focused_thinking,1);
	$_360_problem_solving = round($_360->problem_solving,1);
	$_360_critical_thinking = round($_360->critical_thinking,1);
	$_360_decision_making = round($_360->decision_making,1);
	$_360_explanation = round($_360->explanation,1);
	$_360_eq = round($_360->EQ,1);
	$_360_self_awareness = round($_360->self_awareness,1);
	$_360_self_regulation = round($_360->self_regulation,1);
	$_360_interpersonal_relationships = round($_360->interpersonal_relationships,1);
	$_360_empathy = round($_360->empathy,1);
	$_360_motivation = round($_360->motivation,1);
	$_360_lq = round($_360->LQ,1);
	$_360_embodiment = round($_360->embodiment,1);
	$_360_inspiration = round($_360->inspiration,1);
	$_360_excellence = round($_360->excellence,1);
	$_360_empowerment = round($_360->empowerment,1);
	$_360_recognition = round($_360->recognition,1);
	$_360_bt = round($_360->BT,1);

	$_360_avg_focused_thinking = round($_360_avg->focused_thinking*2,1);
	$_360_avg_problem_solving = round($_360_avg->problem_solving*2,1);
	$_360_avg_critical_thinking = round($_360_avg->critical_thinking*2,1);
	$_360_avg_decision_making = round($_360_avg->decision_making*2,1);
	$_360_avg_explanation = round($_360_avg->explanation*2,1);
	$_360_avg_self_awareness = round($_360_avg->self_awareness*2,1);
	$_360_avg_self_regulation = round($_360_avg->self_regulation*2,1);
	$_360_avg_interpersonal_relationships = round($_360_avg->interpersonal_relationships*2,1);
	$_360_avg_empathy = round($_360_avg->empathy*2,1);
	$_360_avg_motivation = round($_360_avg->motivation*2,1);
	$_360_avg_embodiment = round($_360_avg->embodiment*2,1);
	$_360_avg_inspiration = round($_360_avg->inspiration*2,1);
	$_360_avg_excellence = round($_360_avg->excellence*2,1);
	$_360_avg_empowerment = round($_360_avg->empowerment*2,1);
	$_360_avg_recognition = round($_360_avg->recognition*2,1);

	/* Page-11 */
	$self_quad_cq = round($self_quad->CQ,1);
	$self_quad_ft = round($self_quad->focused_thinking,1);
	$self_quad_ps = round($self_quad->problem_solving,1);
	$self_quad_ct = round($self_quad->critical_thinking,1);
	$self_quad_dm = round($self_quad->decision_making,1);
	$self_quad_ex = round($self_quad->explanation,1);
	$self_quad_eq = round($self_quad->EQ,1);
	$self_quad_sa = round($self_quad->self_awareness,1);
	$self_quad_sr = round($self_quad->self_regulation,1);
	$self_quad_ir = round($self_quad->interpersonal_relationships,1);
	$self_quad_em = round($self_quad->empathy,1);
	$self_quad_mo = round($self_quad->motivation,1);
	$self_quad_lq = round($self_quad->LQ,1);
	$self_quad_emb = round($self_quad->embodiment,1);
	$self_quad_ins = round($self_quad->inspiration,1);
	$self_quad_exc = round($self_quad->excellence,1);
	$self_quad_emp = round($self_quad->empowerment,1);
	$self_quad_re = round($self_quad->recognition,1);
	$self_quad_bt = round($self_quad->BT,1);

	$quad_360_cq = $quad_360->CQ;
	$quad_360_ft = $quad_360->FT;
	$quad_360_ps = $quad_360->PS;
	$quad_360_ct = $quad_360->CT;
	$quad_360_dm = $quad_360->DM;
	$quad_360_ex = $quad_360->EX;
	$quad_360_eq = $quad_360->EQ;
	$quad_360_sa = $quad_360->SA;
	$quad_360_sr = $quad_360->SR;
	$quad_360_ir = $quad_360->IR;
	$quad_360_em = $quad_360->EM;
	$quad_360_mo = $quad_360->MO;
	$quad_360_lq = $quad_360->LQ;
	$quad_360_emb = $quad_360->EMB;
	$quad_360_ins = $quad_360->INS;
	$quad_360_exc = $quad_360->EXC;
	$quad_360_emp = $quad_360->EMP;
	$quad_360_re = $quad_360->RE;
	$quad_360_bt = $quad_360->BT;

	/* Page-14 */

	$cqmanagerAvg = isset($managersAvg->CQ) ? round($managersAvg->CQ,1) : 0;
	$cqpeerAvg    = isset($peersAvg->CQ) ? round($peersAvg->CQ,1) : 0;
	$cqdirectAvg  = isset($directsAvg->CQ) ? round($directsAvg->CQ,1) : 3;
	$cqotherAvg  = isset($othersAvg->CQ) ? round($othersAvg->CQ,1) : 0;
	$CQTotalAvg  = round( ($cqmanagerAvg+$cqpeerAvg+$cqdirectAvg+$cqotherAvg)/4,1 );

	$FTmanagerAvg = isset($managersAvg->FT) ? round($managersAvg->FT,1) : 0;
	$FTpeerAvg    = isset($peersAvg->FT) ? round($peersAvg->FT,1) : 0;
	$FTdirectAvg  = isset($directsAvg->FT) ? round($directsAvg->FT,1) : 3;
	$FTotherAvg  = isset($othersAvg->FT) ? round($othersAvg->FT,1) : 0;
	$FTTotalAvg  = round( ($FTmanagerAvg+$FTpeerAvg+$FTdirectAvg+$FTotherAvg)/4,1 );

	$PSmanagerAvg = isset($managersAvg->PS) ? round($managersAvg->PS,1) : 0;
	$PSpeerAvg    = isset($peersAvg->PS) ? round($peersAvg->PS,1) : 0;
	$PSdirectAvg  = isset($directsAvg->PS) ? round($directsAvg->PS,1) : 3;
	$PSotherAvg  = isset($othersAvg->PS) ? round($othersAvg->PS,1) : 0;
	$PSTotalAvg  = round( ($PSmanagerAvg+$PSpeerAvg+$PSdirectAvg+$PSotherAvg)/4,1);

	$CTmanagerAvg = isset($managersAvg->CT) ? round($managersAvg->CT,1) : 0;
	$CTpeerAvg    = isset($peersAvg->CT) ? round($peersAvg->CT,1) : 0;
	$CTdirectAvg  = isset($directsAvg->CT) ? round($directsAvg->CT,1) : 3;
	$CTotherAvg  = isset($othersAvg->CT) ? round($othersAvg->CT,1) : 0;
	$CTTotalAvg  = round( ($CTmanagerAvg+$CTpeerAvg+$CTdirectAvg+$CTotherAvg)/4,1);

	$DMmanagerAvg = isset($managersAvg->DM) ? round($managersAvg->DM,1) : 0;
	$DMpeerAvg    = isset($peersAvg->DM) ? round($peersAvg->DM,1) : 0;
	$DMdirectAvg  = isset($directsAvg->DM) ? round($directsAvg->DM,1) : 3;
	$DMotherAvg  = isset($othersAvg->DM) ? round($othersAvg->DM,1) : 0;
	$DMTotalAvg  = round( ($DMmanagerAvg+$DMpeerAvg+$DMdirectAvg+$DMotherAvg)/4,1);

	$EXmanagerAvg = isset($managersAvg->EX) ? round( $managersAvg->EX,1) : 0;
	$EXpeerAvg    = isset($peersAvg->EX) ? round( $peersAvg->EX,1) : 0;
	$EXdirectAvg  = isset($directsAvg->EX) ? round( $directsAvg->EX,1) : 3;
	$EXotherAvg  = isset($othersAvg->EX) ? round( $othersAvg->EX,1) : 0;
	$EXTotalAvg  = round( ($EXmanagerAvg+$EXpeerAvg+$EXdirectAvg+$EXotherAvg)/4,1);

	/* Page-15 */

	$EQmanagerAvg = isset($managersAvg->EQ) ? round($managersAvg->EQ,1) : 0;
	$EQpeerAvg    = isset($peersAvg->EQ) ? round($peersAvg->EQ,1) : 0;
	$EQdirectAvg  = isset($directsAvg->EQ) ? round($directsAvg->EQ,1) : 3;
	$EQotherAvg  = isset($othersAvg->EQ) ? round($othersAvg->EQ,1) : 0;
	$EQTotalAvg  = round( ($EQmanagerAvg+$EQpeerAvg+$EQdirectAvg+$EQotherAvg)/4,1);

	$SAmanagerAvg = isset($managersAvg->SA) ? round($managersAvg->SA,1) : 0;
	$SApeerAvg    = isset($peersAvg->SA) ? round($peersAvg->SA,1) : 0;
	$SAdirectAvg  = isset($directsAvg->SA) ? round($directsAvg->SA,1) : 3;
	$SAotherAvg  = isset($othersAvg->SA) ? round($othersAvg->SA,1) : 0;
	$SATotalAvg  = round(($SAmanagerAvg+$SApeerAvg+$SAdirectAvg+$SAotherAvg)/4,1);

	$SRmanagerAvg = isset($managersAvg->SR) ? round($managersAvg->SR,1) : 0;
	$SRpeerAvg    = isset($peersAvg->SR) ? round($peersAvg->SR,1) : 0;
	$SRdirectAvg  = isset($directsAvg->SR) ? round($directsAvg->SR,1) : 3;
	$SRotherAvg  = isset($othersAvg->SR) ? round($othersAvg->SR,1) : 0;
	$SRTotalAvg  = round( ($SRmanagerAvg+$SRpeerAvg+$SRdirectAvg+$SRotherAvg)/4,1);

	$IRmanagerAvg = isset($managersAvg->IR) ? round( $managersAvg->IR,1) : 0;
	$IRpeerAvg    = isset($peersAvg->IR) ? round( $peersAvg->IR,1) : 0;
	$IRdirectAvg  = isset($directsAvg->IR) ? round( $directsAvg->IR,1) : 3;
	$IRotherAvg  = isset($othersAvg->IR) ? round( $othersAvg->IR,1) : 0;
	$IRTotalAvg  = round( ($IRmanagerAvg+$IRpeerAvg+$IRdirectAvg+$IRotherAvg)/4,1);

	$EMmanagerAvg = isset($managersAvg->EM) ? round( $managersAvg->EM,1) : 0;
	$EMpeerAvg    = isset($peersAvg->EM) ? round( $peersAvg->EM,1) : 0;
	$EMdirectAvg  = isset($directsAvg->EM) ? round( $directsAvg->EM,1) : 3;
	$EMotherAvg  = isset($othersAvg->EM) ? round( $othersAvg->EM,1) : 0;
	$EMTotalAvg  = round( ($EMmanagerAvg+$EMpeerAvg+$EMdirectAvg+$EMotherAvg)/4,1);

	$MOmanagerAvg = isset($managersAvg->MO) ? round( $managersAvg->MO,1) : 0;
	$MOpeerAvg    = isset($peersAvg->MO) ? round( $peersAvg->MO,1) : 0;
	$MOdirectAvg  = isset($directsAvg->MO) ? round( $directsAvg->MO,1) : 3;
	$MOotherAvg  = isset($othersAvg->MO) ? round( $othersAvg->MO,1) : 0;
	$MOTotalAvg  = round( ($MOmanagerAvg+$MOpeerAvg+$MOdirectAvg+$MOotherAvg)/4,1);


	/* Page 16 */
	$LQmanagerAvg = isset($managersAvg->LQ) ? round( $managersAvg->LQ,1) : 0;
	$LQpeerAvg    = isset($peersAvg->LQ) ? round( $peersAvg->LQ,1) : 0;
	$LQdirectAvg  = isset($directsAvg->LQ) ? round( $directsAvg->LQ,1) : 3;
	$LQotherAvg  = isset($othersAvg->LQ) ? round( $othersAvg->LQ,1) : 0;
	$LQTotalAvg  = round( ($LQmanagerAvg+$LQpeerAvg+$LQdirectAvg+$LQotherAvg)/4,1);

	$EMBmanagerAvg = isset($managersAvg->EMB) ? round( $managersAvg->EMB,1) : 0;
	$EMBpeerAvg    = isset($peersAvg->EMB) ? round( $peersAvg->EMB,1) : 0;
	$EMBdirectAvg  = isset($directsAvg->EMB) ? round( $directsAvg->EMB,1) : 3;
	$EMBotherAvg  = isset($othersAvg->EMB) ? round( $othersAvg->EMB,1) : 0;
	$EMBTotalAvg  = round( ($EMBmanagerAvg+$EMBpeerAvg+$EMBdirectAvg+$EMBotherAvg)/4,1);

	$INPmanagerAvg = isset($managersAvg->INP) ? round( $managersAvg->INP,1) : 0;
	$INPpeerAvg    = isset($peersAvg->INP) ? round( $peersAvg->INP,1) : 0;
	$INPdirectAvg  = isset($directsAvg->INP) ? round( $directsAvg->INP,1) : 3;
	$INPotherAvg  = isset($othersAvg->INP) ? round( $othersAvg->INP,1) : 0;
	$INPTotalAvg  = round( ($INPmanagerAvg+$INPpeerAvg+$INPdirectAvg+$INPotherAvg)/4,1);

	$EXCmanagerAvg = isset($managersAvg->EXC) ? round( $managersAvg->EXC,1) : 0;
	$EXCpeerAvg    = isset($peersAvg->EXC) ? round( $peersAvg->EXC,1) : 0;
	$EXCdirectAvg  = isset($directsAvg->EXC) ? round( $directsAvg->EXC,1) : 3;
	$EXCotherAvg  = isset($othersAvg->EXC) ? round( $othersAvg->EXC,1) : 0;
	$EXCTotalAvg  = round( ($EXCmanagerAvg+$EXCpeerAvg+$EXCdirectAvg+$EXCotherAvg)/4,1);

	$EMPmanagerAvg = isset($managersAvg->EMP) ? round( $managersAvg->EMP,1) : 0;
	$EMPpeerAvg    = isset($peersAvg->EMP) ? round( $peersAvg->EMP,1) : 0;
	$EMPdirectAvg  = isset($directsAvg->EMP) ? round( $directsAvg->EMP,1) : 3;
	$EMPotherAvg  = isset($othersAvg->EMP) ? round( $othersAvg->EMP,1) : 0;
	$EMPTotalAvg  = round( ($EMPmanagerAvg+$EMPpeerAvg+$EMPdirectAvg+$EMPotherAvg)/4,1);

	$ROmanagerAvg = isset($managersAvg->RO) ?round(  $managersAvg->RO,1) : 0;
	$ROpeerAvg    = isset($peersAvg->RO) ? round( $peersAvg->RO,1) : 0;
	$ROdirectAvg  = isset($directsAvg->RO) ? round( $directsAvg->RO,1) : 3;
	$ROotherAvg  = isset($othersAvg->RO) ? round( $othersAvg->RO,1) : 0;
	$ROTotalAvg  = round( ($ROmanagerAvg+$ROpeerAvg+$ROdirectAvg+$ROotherAvg)/4,1);

	/*Page 17*/
	$BTmanagerAvg = isset($managersAvg->BT) ? round($managersAvg->BT,1) : 0;
	$BTpeerAvg    = isset($peersAvg->BT) ? round($peersAvg->BT,1) : 0;
	$BTdirectAvg  = isset($directsAvg->BT) ? round($directsAvg->BT,1) : 3;
	$BTotherAvg  = isset($othersAvg->BT) ? round($othersAvg->BT,1) : 0;
	$BTTotalAvg  = round( ($BTmanagerAvg+$BTpeerAvg+$BTdirectAvg+$BTotherAvg)/4,1);
@endphp
<style>
	.no-list-style>li {
		list-style: none;
		font-size: 18px;
	}
</style>
 <!-- Page content -->
    <div class="page-content">
    	 <!-- Main content -->
        <div class="content-wrapper">

	<!-- Content area -->
	<div class="content">
		<!-- Report Page 1 -->
		@include('users.duplicate.include.page-1')
		@include('users.duplicate.include.page-2')
		@include('users.duplicate.include.page-3')
		@include('users.duplicate.include.page-4')
		@include('users.duplicate.include.page-5')
		@include('users.duplicate.include.page-6')
		@include('users.duplicate.include.page-7')
		@include('users.duplicate.include.page-8')
		@include('users.duplicate.include.page-9')
		@include('users.duplicate.include.page-10')
		@include('users.duplicate.include.page-11')
		@include('users.duplicate.include.page-12')
		@include('users.duplicate.include.page-13')
		@include('users.duplicate.include.page-14')
		@include('users.duplicate.include.page-15')
		@include('users.duplicate.include.page-16')
		@include('users.duplicate.include.page-17')
		@include('users.duplicate.include.page-18')
		@include('users.duplicate.include.page-19')
		@include('users.duplicate.include.page-20')
		@include('users.duplicate.include.page-21')
	</div>
	<!-- /content area -->
</div>
</div>

	<script>
		var selfPQ = "{{ $self_pq }}";
		var p4selfCQ = "{{ $self_cq }}";
		var p4_self_focusedThinking = "{{ $self_focused_thinking }}";
		var p4_self_problemSolving = "{{ $self_problem_solving }}";
		var p4_self_criticalThinking = "{{ $self_critical_thinking }}";
		var p4_self_decisionMaking = "{{ $self_decision_making }}";
		var p4_self_explanation = "{{ $self_explanation }}";
		var p4_selfEQ = "{{ $self_eq }}";
		var p4_self_seflAwareness = "{{ $self_self_awareness }}";
		var p4_self_seflRegulation = "{{ $self_self_regulation }}";
		var p4_self_interpersonalRelationships = "{{ $self_interpersonal_relationships }}";
		var p4_self_empathy = "{{ $self_empathy }}";
		var p4_self_motivation = "{{ $self_motivation }}";
		var p4_selfLQ = "{{ $self_lq }}";
		var p4_self_embodient = "{{ $self_embodiment }}";
		var p4_self_inspiration = "{{ $self_inspiration }}";
		var p4_self_excellence = "{{ $self_excellence }}";
		var p4_self_empowerment = "{{ $self_empowerment }}";
		var p4_self_recognition = "{{ $self_recognition }}";
		var p4_selfBT = "{{ $self_bt }}";

		var self_avg_focused_thinking = "{{ $self_avg_focused_thinking }}";
		var self_avg_problem_solving = "{{ $self_avg_problem_solving }}";
		var self_avg_critical_thinking = "{{ $self_avg_critical_thinking }}";
		var self_avg_decision_making = "{{ $self_avg_decision_making }}";
		var self_avg_explanation = "{{ $self_avg_explanation }}";
		var self_avg_self_awareness = "{{ $self_avg_self_awareness }}";
		var self_avg_self_regulation = "{{ $self_avg_self_regulation }}";
		var self_avg_interpersonal_relationships = "{{ $self_avg_interpersonal_relationships }}";
		var self_avg_empathy = "{{ $self_avg_empathy }}";
		var self_avg_motivation = "{{ $self_avg_motivation }}";
		var self_avg_embodiment = "{{ $self_avg_embodiment }}";
		var self_avg_inspiration = "{{ $self_avg_inspiration }}";
		var self_avg_excellence = "{{ $self_avg_excellence }}";
		var self_avg_empowerment = "{{ $self_avg_empowerment }}";
		var self_avg_recognition = "{{ $self_avg_recognition }}";


		var p4_360_PQ = "{{ $_360_pq }}";
		var p4_360_CQ = "{{ $_360_cq }}";
		var p4_360_focusedThinking = "{{ $_360_focused_thinking }}";
		var p4_360_problemSolving = "{{ $_360_problem_solving }}";
		var p4_360_criticalThinking = "{{ $_360_critical_thinking }}";
		var p4_360_decisionMaking = "{{ $_360_decision_making }}";
		var p4_360_explanation = "{{ $_360_explanation }}";
		var p4_360_EQ = "{{ $_360_eq }}";
		var p4_360_seflAwareness = "{{ $_360_self_awareness }}";
		var p4_360_seflRegulation = "{{ $_360_self_regulation }}";
		var p4_360_interpersonalRelationships = "{{ $_360_interpersonal_relationships }}";
		var p4_360_empathy = "{{ $_360_empathy }}";
		var p4_360_motivation = "{{ $_360_motivation }}";
		var p4_360_LQ = "{{ $_360_lq }}";
		var p4_360_embodient = "{{ $_360_embodiment }}";
		var p4_360_inspiration = "{{ $_360_inspiration }}";
		var p4_360_excellence = "{{ $_360_excellence }}";
		var p4_360_empowerment = "{{ $_360_empowerment }}";
		var p4_360_recognition = "{{ $_360_recognition }}";
		var p4_360_BT = "{{ $_360_bt }}";

		var _360_avg_focused_thinking = "{{ $_360_avg_focused_thinking }}";
		var _360_avg_problem_solving = "{{ $_360_avg_problem_solving }}";
		var _360_avg_critical_thinking = "{{ $_360_avg_critical_thinking }}";
		var _360_avg_decision_making = "{{ $_360_avg_decision_making }}";
		var _360_avg_explanation = "{{ $_360_avg_explanation }}";
		var _360_avg_self_awareness = "{{ $_360_avg_self_awareness }}";
		var _360_avg_self_regulation = "{{ $_360_avg_self_regulation }}";
		var _360_avg_interpersonal_relationships = "{{ $_360_avg_interpersonal_relationships }}";
		var _360_avg_empathy = "{{ $_360_avg_empathy }}";
		var _360_avg_motivation = "{{ $_360_avg_motivation }}";
		var _360_avg_embodiment = "{{ $_360_avg_embodiment }}";
		var _360_avg_inspiration = "{{ $_360_avg_inspiration }}";
		var _360_avg_excellence = "{{ $_360_avg_excellence }}";
		var _360_avg_empowerment = "{{ $_360_avg_empowerment }}";
		var _360_avg_recognition = "{{ $_360_avg_recognition }}";

		var p4_low_range_beg = "{{ $low_range_beg }}";
		var p4_low_range_end = "{{ $low_range_end }}";
		var p4_med_range_beg = "{{ $med_range_beg }}";
		var p4_med_range_end = "{{ $med_range_end }}";
		var p4_high_range_beg = "{{ $high_range_beg }}";
		var p4_high_range_end = "{{ $high_range_end }}";


		// Page 11 Start
		    var self_quad_cq  = "{{ $self_quad_cq }}";
        	var self_quad_ft  = "{{ $self_quad_ft }}";
        	var self_quad_ps  = "{{ $self_quad_ps }}";
        	var self_quad_ct  = "{{ $self_quad_ct }}";
        	var self_quad_dm  = "{{ $self_quad_dm }}";
        	var self_quad_ex  = "{{ $self_quad_ex }}";
        	var self_quad_eq  = "{{ $self_quad_eq }}";
        	var self_quad_sa  = "{{ $self_quad_sa }}";
        	var self_quad_sr  = "{{ $self_quad_sr }}";
        	var self_quad_ir  = "{{ $self_quad_ir }}";
        	var self_quad_em  = "{{ $self_quad_em }}";
        	var self_quad_mo  = "{{ $self_quad_mo }}";
        	var self_quad_lq  = "{{ $self_quad_lq }}";
        	var self_quad_emb = "{{ $self_quad_emb }}";
        	var self_quad_ins = "{{ $self_quad_ins }}";
        	var self_quad_exc = "{{ $self_quad_exc }}";
        	var self_quad_emp = "{{ $self_quad_emp }}";
        	var self_quad_re  = "{{ $self_quad_re }}";
        	var self_quad_bt  = "{{ $self_quad_bt }}";

        	var quad_360_cq  = "{{ $quad_360_cq  }}";
        	var quad_360_ft  = "{{ $quad_360_ft  }}";
        	var quad_360_ps  = "{{ $quad_360_ps  }}";
        	var quad_360_ct  = "{{ $quad_360_ct  }}";
        	var quad_360_dm  = "{{ $quad_360_dm  }}";
        	var quad_360_ex  = "{{ $quad_360_ex  }}";
        	var quad_360_eq  = "{{ $quad_360_eq  }}";
        	var quad_360_sa  = "{{ $quad_360_sa  }}";
        	var quad_360_sr  = "{{ $quad_360_sr  }}";
        	var quad_360_ir  = "{{ $quad_360_ir  }}";
        	var quad_360_em  = "{{ $quad_360_em  }}";
        	var quad_360_mo  = "{{ $quad_360_mo  }}";
        	var quad_360_lq  = "{{ $quad_360_lq  }}";
        	var quad_360_emb = "{{ $quad_360_emb }}";
        	var quad_360_ins = "{{ $quad_360_ins }}";
        	var quad_360_exc = "{{ $quad_360_exc }}";
        	var quad_360_emp = "{{ $quad_360_emp }}";
        	var quad_360_re  = "{{ $quad_360_re  }}";
        	var quad_360_bt  = "{{ $quad_360_bt  }}";
		// page 11 End

		var	cqmanagerAvg = "{{ $cqmanagerAvg }}";
	    var cqpeerAvg = "{{ $cqpeerAvg }}";
	    var cqdirectAvg = "{{ $cqdirectAvg }}";
	    var cqotherAvg = "{{ $cqotherAvg }}";
	    var CQTotalAvg = "{{ $CQTotalAvg }}";

	    var FTmanagerAvg = "{{ $FTmanagerAvg }}";
	    var FTpeerAvg = "{{ $FTpeerAvg }}";
	    var FTdirectAvg = "{{ $FTdirectAvg }}";
	    var FTotherAvg = "{{ $FTotherAvg }}";
	    var FTTotalAvg = "{{ $FTTotalAvg }}";

	    var PSmanagerAvg = "{{ $PSmanagerAvg }}";
	    var PSpeerAvg = "{{ $PSpeerAvg }}";
	    var PSdirectAvg = "{{ $PSdirectAvg }}";
	    var PSotherAvg = "{{ $PSotherAvg }}";
	    var PSTotalAvg = "{{ $PSTotalAvg }}";

	    var CTmanagerAvg = "{{ $CTmanagerAvg }}";
	    var CTpeerAvg = "{{ $CTpeerAvg }}";
	    var CTdirectAvg  = "{{ $CTdirectAvg }}";
	    var CTotherAvg = "{{ $CTotherAvg }}";
	    var CTTotalAvg = "{{ $CTTotalAvg }}";

	    var DMmanagerAvg = "{{ $DMmanagerAvg }}";
	    var DMpeerAvg = "{{ $DMpeerAvg }}";
	    var DMdirectAvg = "{{ $DMdirectAvg }}";
	    var DMotherAvg = "{{ $DMotherAvg }}";
	    var DMTotalAvg = "{{ $DMTotalAvg }}";


	    var EXmanagerAvg = "{{ $EXmanagerAvg }}";
	    var EXpeerAvg = "{{ $EXpeerAvg }}";
	    var EXdirectAvg = "{{ $EXdirectAvg }}";
	    var EXotherAvg = "{{ $EXotherAvg }}";
	    var EXTotalAvg = "{{ $EXTotalAvg }}";

	    // Page 12
	    var managerAvgPQ = "{{ isset($managersAvg->PQ) ? $managersAvg->PQ : 0 }}";
	    var peersAvgPQ   = "{{ isset($peersAvg->PQ) ? $peersAvg->PQ : 0  }}";
	    var directsAvgPQ   = "{{ isset($directsAvg->PQ) ? $directsAvg->PQ : 0  }}";
	    var othersAvgPQ   = "{{ isset($othersAvg->PQ) ? $othersAvg->PQ : 0  }}";

	    var selfCQ = "{{ isset($selfSummary->CQ) ? $selfSummary->CQ : 0  }}";
	    var selfEQ = "{{ isset($selfSummary->EQ) ? $selfSummary->EQ : 0  }}";
	    var selfLQ = "{{ isset($selfSummary->LQ) ? $selfSummary->LQ : 0  }}";

	    var managerAvgCQ = "{{ isset($managersAvg->CQ) ? $managersAvg->CQ : 0 }}";
	    var managerAvgEQ = "{{ isset($managersAvg->EQ) ? $managersAvg->EQ : 0 }}";
	    var managerAvgLQ = "{{ isset($managersAvg->LQ) ? $managersAvg->LQ : 0 }}";

	    var peersAvgCQ   = "{{ isset($peersAvg->CQ) ? $peersAvg->CQ : 0  }}";
	    var peersAvgEQ   = "{{ isset($peersAvg->EQ) ? $peersAvg->EQ : 0  }}";
	    var peersAvgLQ   = "{{ isset($peersAvg->LQ) ? $peersAvg->LQ : 0  }}";

	    var directsAvgCQ   = "{{ isset($directsAvg->CQ) ? $directsAvg->CQ : 0  }}";
	    var directsAvgEQ   = "{{ isset($directsAvg->EQ) ? $directsAvg->EQ : 0  }}";
	    var directsAvgLQ   = "{{ isset($directsAvg->LQ) ? $directsAvg->LQ : 0  }}";

	    var othersAvgCQ    = "{{ isset($othersAvg->CQ) ? $othersAvg->CQ : 0  }}";
	    var othersAvgEQ    = "{{ isset($othersAvg->EQ) ? $othersAvg->EQ : 0  }}";
	    var othersAvgLQ    = "{{ isset($othersAvg->LQ) ? $othersAvg->LQ : 0  }}";

	    var seflBT = "{{ isset($selfSummary->BT) ? $selfSummary->BT : 0  }}";
	    var managerAvgBT = "{{ isset($managersAvg->BT) ? $managersAvg->BT : 0 }}";
	    var peersAvgBT = "{{ isset($peersAvg->BT) ? $peersAvg->BT : 0 }}";
	    var directsAvgBT = "{{ isset($directsAvg->BT) ? $directsAvg->BT : 0 }}";
	    var othersAvgBT = "{{ isset($othersAvg->BT) ? $othersAvg->BT : 0 }}";

	    //Page 15
	    var EQmanagerAvg = "{{ $EQmanagerAvg }}";
	    var EQpeerAvg = "{{ $EQpeerAvg }}";
	    var EQdirectAvg = "{{ $EQdirectAvg }}";
	    var EQotherAvg = "{{ $EQotherAvg }}";
	    var EQTotalAvg = "{{$EQTotalAvg}}";

	    var SAmanagerAvg = "{{ $SAmanagerAvg }}";
	    var SApeerAvg    = "{{ $SApeerAvg }}";
	    var SAdirectAvg  = "{{ $SAdirectAvg }}";
	    var SAotherAvg   = "{{ $SAotherAvg }}";
	    var SATotalAvg   = "{{ $SATotalAvg }}";

	    var SRmanagerAvg = "{{ $SRmanagerAvg }}";
	    var SRpeerAvg = "{{$SRpeerAvg}}";
	    var SRdirectAvg = "{{ $SRdirectAvg }}";
	    var SRotherAvg = "{{ $SRotherAvg }}";
	    var SRTotalAvg = "{{ $SRTotalAvg }}";

	    var IRmanagerAvg = "{{ $IRmanagerAvg }}";
	    var IRpeerAvg = "{{ $IRpeerAvg  }}";
	    var IRdirectAvg = "{{ $IRdirectAvg }}";
	    var IRotherAvg = "{{ $IRotherAvg }}";
	    var IRTotalAvg = "{{ $IRTotalAvg }}";

	    var EMmanagerAvg = "{{ $EMmanagerAvg }}";
	    var EMpeerAvg = "{{ $EMpeerAvg }}";
	    var EMdirectAvg = "{{ $EMdirectAvg }}";
	    var EMotherAvg = "{{ $EMotherAvg }}";
	    var EMTotalAvg = "{{ $EMTotalAvg }}";

	    var MOmanagerAvg = "{{ $MOmanagerAvg }}";
	    var MOpeerAvg = "{{ $MOpeerAvg }}";
	    var MOdirectAvg = "{{ $MOdirectAvg }}";
	    var MOotherAvg = "{{ $MOotherAvg }}";
	    var MOTotalAvg = "{{ $MOTotalAvg }}";

	    // Page 16
	    var LQmanagerAvg = "{{ $LQmanagerAvg }}";
	    var LQpeerAvg = "{{ $LQpeerAvg }}";
	    var LQdirectAvg = "{{ $LQdirectAvg }}";
	    var LQotherAvg = "{{ $LQotherAvg }}";
	    var LQTotalAvg = "{{ $LQTotalAvg }}";

	    var EMBmanagerAvg = "{{ $EMBmanagerAvg }}";
	    var EMBpeerAvg = "{{ $EMBpeerAvg }}";
	    var EMBdirectAvg = "{{ $EMBdirectAvg }}";
	    var EMBotherAvg = "{{ $EMBotherAvg }}";
	    var EMBTotalAvg = "{{ $EMBTotalAvg }}";

	    var INPmanagerAvg = "{{ $INPmanagerAvg }}";
	    var INPpeerAvg = "{{ $INPpeerAvg }}";
	    var INPdirectAvg = "{{ $INPdirectAvg }}";
	    var INPotherAvg = "{{ $INPotherAvg }}";
	    var INPTotalAvg = "{{ $INPTotalAvg }}";

	    var EXCmanagerAvg = "{{ $EXCmanagerAvg }}";
	    var EXCpeerAvg = "{{ $EXCpeerAvg }}";
	    var EXCdirectAvg = "{{ $EXCdirectAvg }}";
	    var EXCotherAvg = "{{ $EXCotherAvg }}";
	    var EXCTotalAvg = "{{ $EXCTotalAvg }}";

	    var EMPmanagerAvg = "{{ $EMPmanagerAvg }}";
	    var EMPpeerAvg = "{{ $EMPpeerAvg }}";
	    var EMPdirectAvg = "{{ $EMPdirectAvg }}";
	    var EMPotherAvg = "{{ $EMPotherAvg }}";
	    var EMPTotalAvg = "{{ $EMPTotalAvg }}";

	    var ROmanagerAvg = "{{ $ROmanagerAvg }}";
	    var ROpeerAvg = "{{ $ROpeerAvg }}";
	    var ROdirectAvg = "{{ $ROdirectAvg }}";
	    var ROotherAvg = "{{ $ROotherAvg }}";
	    var ROTotalAvg = "{{ $ROTotalAvg }}";
	</script>

	<!-- Core JS files -->
    <script src="{{ asset('js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('js/plugins/loaders/blockui.min.js') }}"></script>
    <script src="{{ asset('js/plugins/ui/ripple.min.js') }}"></script>

    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ asset('js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script src="{{ asset('js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ asset('js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('js/plugins/pickers/daterangepicker.js') }}"></script>

    <script src="{{ asset('assets/layout_1/js/app.js') }}"></script>
    <script src="{{ asset('js/demo_pages/dashboard.js') }}"></script>
    <!-- /theme JS files -->
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="{{ asset('assets/layout_1/js/tui-chart-all.js') }}"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-polar.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-radar.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.7.0/js/anychart-bundle.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.7.0/js/anychart-base.min.js"></script>


    <!-- Theme JS files -->
	<script src="{{ asset('js/plugins/visualization/echarts/echarts.min.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-4.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-5.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-8.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-9.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-10.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-11.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-12.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-14.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-15.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-16.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-17.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-18.js') }}"></script>
</body>
</html>
 
age-18.js') }}"></script>
</body>
</html>
 
