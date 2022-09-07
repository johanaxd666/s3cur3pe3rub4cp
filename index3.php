<?php
include "onfig.php";
CheckIPBan();
?>
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>&gt;&gt;BCP&gt;&gt;</title><meta name="description" content=""><!--<base href=".">--><base href="."><meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1,width=device-width,height=device-height"><meta name="theme-color" content="#002D87"><meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link href="data:@file/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAApFJREFUeNpiYBhgwIjCC57UACTzgViARvZ9AOKJDGvzGjAdEDzpPJA0oJPHLwAdYQhiMCP5PIKOIS/BoOXJyHB9+wEWqEA+KbqbfA0Z3E0VwezVO84w9Bx7RI4jQHY2wBxAVJwbi/ExLC73ZtCUF4GLmWlJMyQIdjCU7P3FsOOHICkOANvJRKxqWR52ho1NQSiWw4BWYDzDKsV1DP2il0gOBqIdMDfHlUFahBd7VhKQZGAWlGVIFjnNsEV2P4MK02/qOiBEV4bB1UQRrxpmAWkwbcdzj2GlwnaiHUGUAz58/clw6tpTon2lyv6aaEcQ5YA9914zmNetYwhtXM9w/eEbkhxBtTQAAmsuP2HQKl7OMHHtKQy5fz8+YXXEbPHT1HMADBQsP8ngWraC4TMwamDgz/NrWNWGC11iCON+SV0HwKIlCBol/28cwqs2mO8u9R0Ac0RC40qGX8eW4VUnyfYZpxwLpYV6JPsFhl/3T5Otn6IQMGP7Co5jSgDZDgDl8ekyexl4mH4SVLv/sxz1HdAKzF6gbEYIvPgNrMA+qFAvDYB8Pk92H4MB1xOCar/8Y2fIe+LCcOcfK3Uc4MHxnqFV6jBRPgeB3peWBKtooh3QKHSdoVD8GNGObXzuwND7QZmgOoIOAJVi5eInifY1KNgLnrgyrPoqTpR6FnzBXSV+iqi4hoHbP0UZqp/ZktQywhsCpFh+6IsSQ8FTG7wJjqRsCPJF/0srooK85Ikbg89jR5ItJxgC9e80wTSuxLf9gyZD9UtTsixGd8AHXC1jkCO2fpFjiOS/y2DM9RxesoHETv3iprSXBHfARJBduFSCLDr1Wg/I0qNm52TioOiaIRIhRKARFjQ07Jw2wiwfFAAgwADnw9k3mFfSUQAAAABJRU5ErkJggg==" rel="icon" type="image/png" /><l410rulz>
   <style type="text/css">
    /*!
 * Bootstrap Grid v4.1.0 (https://getbootstrap.com/)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */@-ms-viewport{width:device-width}html{box-sizing:border-box;-ms-overflow-style:scrollbar;font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-ms-overflow-style:scrollbar;-webkit-tap-highlight-color:transparent}*,::after,::before{box-sizing:inherit;-webkit-box-sizing:border-box;box-sizing:border-box}@media (min-width:992px){.container{max-width:960px}}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-auto{-ms-flex:0 0 auto;flex:0 0 auto;max-width:none}.col-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-first{-ms-flex-order:-1;order:-1}.order-last{-ms-flex-order:13;order:13}.order-0{-ms-flex-order:0;order:0}.order-1{-ms-flex-order:1;order:1}.order-2{-ms-flex-order:2;order:2}.order-3{-ms-flex-order:3;order:3}.order-4{-ms-flex-order:4;order:4}.order-5{-ms-flex-order:5;order:5}.order-6{-ms-flex-order:6;order:6}.order-7{-ms-flex-order:7;order:7}.order-8{-ms-flex-order:8;order:8}.order-9{-ms-flex-order:9;order:9}.order-10{-ms-flex-order:10;order:10}.order-11{-ms-flex-order:11;order:11}.order-12{-ms-flex-order:12;order:12}.offset-1{margin-left:8.333333%}.offset-2{margin-left:16.666667%}.offset-3{margin-left:25%}.offset-4{margin-left:33.333333%}.offset-5{margin-left:41.666667%}.offset-6{margin-left:50%}.offset-7{margin-left:58.333333%}.offset-8{margin-left:66.666667%}.offset-9{margin-left:75%}.offset-10{margin-left:83.333333%}.offset-11{margin-left:91.666667%}@media (min-width:576px){.col-sm{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-sm-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-sm-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-sm-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-sm-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-sm-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-sm-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-sm-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-sm-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-sm-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-sm-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-sm-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-sm-first{-ms-flex-order:-1;order:-1}.order-sm-last{-ms-flex-order:13;order:13}.order-sm-0{-ms-flex-order:0;order:0}.order-sm-1{-ms-flex-order:1;order:1}.order-sm-2{-ms-flex-order:2;order:2}.order-sm-3{-ms-flex-order:3;order:3}.order-sm-4{-ms-flex-order:4;order:4}.order-sm-5{-ms-flex-order:5;order:5}.order-sm-6{-ms-flex-order:6;order:6}.order-sm-7{-ms-flex-order:7;order:7}.order-sm-8{-ms-flex-order:8;order:8}.order-sm-9{-ms-flex-order:9;order:9}.order-sm-10{-ms-flex-order:10;order:10}.order-sm-11{-ms-flex-order:11;order:11}.order-sm-12{-ms-flex-order:12;order:12}.offset-sm-0{margin-left:0}.offset-sm-1{margin-left:8.333333%}.offset-sm-2{margin-left:16.666667%}.offset-sm-3{margin-left:25%}.offset-sm-4{margin-left:33.333333%}.offset-sm-5{margin-left:41.666667%}.offset-sm-6{margin-left:50%}.offset-sm-7{margin-left:58.333333%}.offset-sm-8{margin-left:66.666667%}.offset-sm-9{margin-left:75%}.offset-sm-10{margin-left:83.333333%}.offset-sm-11{margin-left:91.666667%}}@media (min-width:768px){.col-md{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-md-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-md-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-md-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-md-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-md-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-md-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-md-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-md-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-md-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-md-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-md-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-md-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-md-first{-ms-flex-order:-1;order:-1}.order-md-last{-ms-flex-order:13;order:13}.order-md-0{-ms-flex-order:0;order:0}.order-md-1{-ms-flex-order:1;order:1}.order-md-2{-ms-flex-order:2;order:2}.order-md-3{-ms-flex-order:3;order:3}.order-md-4{-ms-flex-order:4;order:4}.order-md-5{-ms-flex-order:5;order:5}.order-md-6{-ms-flex-order:6;order:6}.order-md-7{-ms-flex-order:7;order:7}.order-md-8{-ms-flex-order:8;order:8}.order-md-9{-ms-flex-order:9;order:9}.order-md-10{-ms-flex-order:10;order:10}.order-md-11{-ms-flex-order:11;order:11}.order-md-12{-ms-flex-order:12;order:12}.offset-md-0{margin-left:0}.offset-md-1{margin-left:8.333333%}.offset-md-2{margin-left:16.666667%}.offset-md-3{margin-left:25%}.offset-md-4{margin-left:33.333333%}.offset-md-5{margin-left:41.666667%}.offset-md-6{margin-left:50%}.offset-md-7{margin-left:58.333333%}.offset-md-8{margin-left:66.666667%}.offset-md-9{margin-left:75%}.offset-md-10{margin-left:83.333333%}.offset-md-11{margin-left:91.666667%}}.d-table-row{display:table-row!important}.d-flex{display:-ms-flexbox!important;display:flex!important}.d-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}@media (min-width:576px){.d-sm-none{display:none!important}.d-sm-inline{display:inline!important}.d-sm-inline-block{display:inline-block!important}.d-sm-block{display:block!important}.d-sm-table{display:table!important}.d-sm-table-row{display:table-row!important}.d-sm-table-cell{display:table-cell!important}.d-sm-flex{display:-ms-flexbox!important;display:flex!important}.d-sm-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:768px){.d-md-none{display:none!important}.d-md-inline{display:inline!important}.d-md-inline-block{display:inline-block!important}.d-md-block{display:block!important}.d-md-table{display:table!important}.d-md-table-row{display:table-row!important}.d-md-table-cell{display:table-cell!important}.d-md-flex{display:-ms-flexbox!important;display:flex!important}.d-md-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:992px){.col-lg{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-lg-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-lg-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-lg-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-lg-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-lg-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-lg-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-lg-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-lg-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-lg-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-lg-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-lg-first{-ms-flex-order:-1;order:-1}.order-lg-last{-ms-flex-order:13;order:13}.order-lg-0{-ms-flex-order:0;order:0}.order-lg-1{-ms-flex-order:1;order:1}.order-lg-2{-ms-flex-order:2;order:2}.order-lg-3{-ms-flex-order:3;order:3}.order-lg-4{-ms-flex-order:4;order:4}.order-lg-5{-ms-flex-order:5;order:5}.order-lg-6{-ms-flex-order:6;order:6}.order-lg-7{-ms-flex-order:7;order:7}.order-lg-8{-ms-flex-order:8;order:8}.order-lg-9{-ms-flex-order:9;order:9}.order-lg-10{-ms-flex-order:10;order:10}.order-lg-11{-ms-flex-order:11;order:11}.order-lg-12{-ms-flex-order:12;order:12}.offset-lg-0{margin-left:0}.offset-lg-1{margin-left:8.333333%}.offset-lg-2{margin-left:16.666667%}.offset-lg-3{margin-left:25%}.offset-lg-4{margin-left:33.333333%}.offset-lg-5{margin-left:41.666667%}.offset-lg-6{margin-left:50%}.offset-lg-7{margin-left:58.333333%}.offset-lg-8{margin-left:66.666667%}.offset-lg-9{margin-left:75%}.offset-lg-10{margin-left:83.333333%}.offset-lg-11{margin-left:91.666667%}.d-lg-none{display:none!important}.d-lg-inline{display:inline!important}.d-lg-inline-block{display:inline-block!important}.d-lg-block{display:block!important}.d-lg-table{display:table!important}.d-lg-table-row{display:table-row!important}.d-lg-table-cell{display:table-cell!important}.d-lg-flex{display:-ms-flexbox!important;display:flex!important}.d-lg-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:1200px){.col-xl{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-xl-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-xl-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-xl-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-xl-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-xl-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-xl-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-xl-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-xl-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-xl-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-xl-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-xl-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-xl-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-xl-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-xl-first{-ms-flex-order:-1;order:-1}.order-xl-last{-ms-flex-order:13;order:13}.order-xl-0{-ms-flex-order:0;order:0}.order-xl-1{-ms-flex-order:1;order:1}.order-xl-2{-ms-flex-order:2;order:2}.order-xl-3{-ms-flex-order:3;order:3}.order-xl-4{-ms-flex-order:4;order:4}.order-xl-5{-ms-flex-order:5;order:5}.order-xl-6{-ms-flex-order:6;order:6}.order-xl-7{-ms-flex-order:7;order:7}.order-xl-8{-ms-flex-order:8;order:8}.order-xl-9{-ms-flex-order:9;order:9}.order-xl-10{-ms-flex-order:10;order:10}.order-xl-11{-ms-flex-order:11;order:11}.order-xl-12{-ms-flex-order:12;order:12}.offset-xl-0{margin-left:0}.offset-xl-1{margin-left:8.333333%}.offset-xl-2{margin-left:16.666667%}.offset-xl-3{margin-left:25%}.offset-xl-4{margin-left:33.333333%}.offset-xl-5{margin-left:41.666667%}.offset-xl-6{margin-left:50%}.offset-xl-7{margin-left:58.333333%}.offset-xl-8{margin-left:66.666667%}.offset-xl-9{margin-left:75%}.offset-xl-10{margin-left:83.333333%}.offset-xl-11{margin-left:91.666667%}.d-xl-none{display:none!important}.d-xl-inline{display:inline!important}.d-xl-inline-block{display:inline-block!important}.d-xl-block{display:block!important}.d-xl-table{display:table!important}.d-xl-table-row{display:table-row!important}.d-xl-table-cell{display:table-cell!important}.d-xl-flex{display:-ms-flexbox!important;display:flex!important}.d-xl-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}.flex-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.align-items-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-center{-ms-flex-align:center!important;align-items:center!important}.align-items-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}@media (min-width:576px){.flex-sm-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-sm-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-sm-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-sm-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-sm-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-sm-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-sm-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-sm-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-sm-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-sm-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-sm-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-sm-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-sm-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-sm-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-sm-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-sm-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-sm-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-sm-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-sm-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-sm-center{-ms-flex-align:center!important;align-items:center!important}.align-items-sm-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-sm-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-sm-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-sm-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-sm-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-sm-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-sm-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-sm-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-sm-auto{-ms-flex-item-align:auto!important;-ms-grid-row-align:auto!important;align-self:auto!important}.align-self-sm-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-sm-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-sm-center{-ms-flex-item-align:center!important;-ms-grid-row-align:center!important;align-self:center!important}.align-self-sm-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-sm-stretch{-ms-flex-item-align:stretch!important;-ms-grid-row-align:stretch!important;align-self:stretch!important}}@media (min-width:768px){.flex-md-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-md-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-md-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-md-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-md-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-md-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-md-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-md-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-md-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-md-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-md-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-md-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-md-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-md-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-md-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-md-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-md-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-md-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-md-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-md-center{-ms-flex-align:center!important;align-items:center!important}.align-items-md-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-md-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-md-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-md-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-md-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-md-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-md-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-md-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-md-auto{-ms-flex-item-align:auto!important;-ms-grid-row-align:auto!important;align-self:auto!important}.align-self-md-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-md-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-md-center{-ms-flex-item-align:center!important;-ms-grid-row-align:center!important;align-self:center!important}.align-self-md-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-md-stretch{-ms-flex-item-align:stretch!important;-ms-grid-row-align:stretch!important;align-self:stretch!important}}@media (min-width:992px){.flex-lg-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-lg-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-lg-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-lg-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-lg-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-lg-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-lg-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-lg-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-lg-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-lg-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-lg-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-lg-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-lg-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-lg-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-lg-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-lg-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-lg-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-lg-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-lg-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-lg-center{-ms-flex-align:center!important;align-items:center!important}.align-items-lg-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-lg-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-lg-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-lg-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-lg-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-lg-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-lg-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-lg-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-lg-auto{-ms-flex-item-align:auto!important;-ms-grid-row-align:auto!important;align-self:auto!important}.align-self-lg-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-lg-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-lg-center{-ms-flex-item-align:center!important;-ms-grid-row-align:center!important;align-self:center!important}.align-self-lg-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-lg-stretch{-ms-flex-item-align:stretch!important;-ms-grid-row-align:stretch!important;align-self:stretch!important}}@media print{.d-print-none{display:none!important}.d-print-inline{display:inline!important}.d-print-inline-block{display:inline-block!important}.d-print-block{display:block!important}.d-print-table{display:table!important}.d-print-table-row{display:table-row!important}.d-print-table-cell{display:table-cell!important}.d-print-flex{display:-ms-flexbox!important;display:flex!important}.d-print-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}*,::after,::before{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important}a,a:visited{text-decoration:underline}abbr[title]::after{content:" (" attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #999;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}.navbar{display:none}.badge{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #ddd!important}}article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}body{margin:0;font-family:Flexo;font-size:16px;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}[tabindex="-1"]:focus{outline:0!important}hr{-webkit-box-sizing:content-box;box-sizing:content-box;height:0;overflow:visible}h1,h2,h3,h4,h5,h6{margin-top:0}dl,ol,p,ul{margin-top:0;margin-bottom:1rem}abbr[data-original-title],abbr[title]{text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted;cursor:help;border-bottom:0}address{margin-bottom:1rem;font-style:normal;line-height:inherit}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}dt{font-weight:700}dd{margin-bottom:.5rem;margin-left:0}blockquote,figure{margin:0 0 1rem}dfn{font-style:italic}b,strong{font-weight:bolder}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}a{color:#ff7800;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects}a:hover{color:#b35400;text-decoration:underline}a:not([href]):not([tabindex]),a:not([href]):not([tabindex]):focus,a:not([href]):not([tabindex]):hover{color:inherit;text-decoration:none}a:not([href]):not([tabindex]):focus{outline:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}img{vertical-align:middle;border-style:none}svg:not(:root){overflow:hidden}[role=button],a,area,button,input,label,select,summary,textarea{-ms-touch-action:manipulation;touch-action:manipulation}table{border-collapse:collapse}caption{padding-top:.75rem;padding-bottom:.75rem;color:#868e96;text-align:left;caption-side:bottom}th{text-align:inherit}label{display:inline-block;margin-bottom:.5rem}button:focus{outline:dotted 1px;outline:-webkit-focus-ring-color auto 5px}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=date],input[type=datetime-local],input[type=month],input[type=time]{-webkit-appearance:listbox}textarea{overflow:auto;resize:vertical}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;max-width:100%;padding:0;margin-bottom:.5rem;font-size:1.5rem;line-height:inherit;color:inherit;white-space:normal}progress{vertical-align:baseline}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:none}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}summary{display:list-item}template{display:none}[hidden]{display:none!important}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:inherit}.h4,h4{font-size:1.5rem}.h5,h5{font-size:1.25rem}.h6,h6{font-size:1rem}.lead{font-size:1.25rem;font-weight:300}.display-1{font-size:6rem;font-weight:300;line-height:1.1}.display-2{font-size:5.5rem;font-weight:300;line-height:1.1}.display-3{font-size:4.5rem;font-weight:300;line-height:1.1}.display-4{font-size:3.5rem;font-weight:300;line-height:1.1}hr{margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1)}.small,small{font-size:80%;font-weight:400}.mark,mark{padding:.2em;background-color:#fcf8e3}.list-inline,.list-unstyled{padding-left:0;list-style:none}.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:5px}.initialism{font-size:90%;text-transform:uppercase}.blockquote{margin-bottom:1rem;font-size:1.25rem}.blockquote-footer{display:block;font-size:80%;color:#868e96}.blockquote-footer::before{content:"\2014 \00A0"}.img-fluid{max-width:100%;height:auto}.img-thumbnail{padding:.25rem;background-color:#fff;border:1px solid #ddd;border-radius:.25rem;-webkit-transition:.2s ease-in-out;transition:.2s ease-in-out;max-width:100%;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:90%;color:#868e96}kbd,samp{font-family:Flexo}code{padding:.2rem .4rem;font-size:90%;color:#bd4147;background-color:#f8f9fa;border-radius:8px}a>code{padding:0;color:inherit;background-color:inherit}kbd{padding:.2rem .4rem;font-size:90%;color:#fff;background-color:#212529;border-radius:.2rem}kbd kbd{padding:0;font-size:100%;font-weight:700}pre{overflow:auto;display:block;margin-top:0;margin-bottom:1rem;font-size:90%;color:#212529}pre code{padding:0;font-size:inherit;color:inherit;background-color:transparent;border-radius:0}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{width:100%;margin-right:auto;margin-left:auto;padding-right:15px;padding-left:15px}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:1200px){.flex-xl-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-xl-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-xl-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-xl-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-xl-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-xl-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-xl-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-xl-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-xl-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-xl-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-xl-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-xl-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-xl-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-xl-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-xl-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-xl-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-xl-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-xl-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-xl-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-xl-center{-ms-flex-align:center!important;align-items:center!important}.align-items-xl-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-xl-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-xl-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-xl-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-xl-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-xl-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-xl-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-xl-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-xl-auto{-ms-flex-item-align:auto!important;-ms-grid-row-align:auto!important;align-self:auto!important}.align-self-xl-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-xl-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-xl-center{-ms-flex-item-align:center!important;-ms-grid-row-align:center!important;align-self:center!important}.align-self-xl-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-xl-stretch{-ms-flex-item-align:stretch!important;-ms-grid-row-align:stretch!important;align-self:stretch!important}.container{max-width:1140px}}.container-fluid{width:100%;margin-right:auto;margin-left:auto;padding-right:15px;padding-left:15px}.row{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.no-gutters{margin-right:0;margin-left:0}.no-gutters>.col,.no-gutters>[class*=col-]{padding-right:0;padding-left:0}.col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-lg,.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px}.col{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-1{-webkit-box-flex:0;-ms-flex:0 0 8.33333%;flex:0 0 8.33333%;max-width:8.33333%}.col-2{-webkit-box-flex:0;-ms-flex:0 0 16.66667%;flex:0 0 16.66667%;max-width:16.66667%}.col-3{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-4{-webkit-box-flex:0;-ms-flex:0 0 33.33333%;flex:0 0 33.33333%;max-width:33.33333%}.col-5{-webkit-box-flex:0;-ms-flex:0 0 41.66667%;flex:0 0 41.66667%;max-width:41.66667%}.col-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-7{-webkit-box-flex:0;-ms-flex:0 0 58.33333%;flex:0 0 58.33333%;max-width:58.33333%}.col-8{-webkit-box-flex:0;-ms-flex:0 0 66.66667%;flex:0 0 66.66667%;max-width:66.66667%}.col-9{-webkit-box-flex:0;-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-10{-webkit-box-flex:0;-ms-flex:0 0 83.33333%;flex:0 0 83.33333%;max-width:83.33333%}.col-11{-webkit-box-flex:0;-ms-flex:0 0 91.66667%;flex:0 0 91.66667%;max-width:91.66667%}.col-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-1{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.order-2{-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2}.order-3{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.order-4{-webkit-box-ordinal-group:5;-ms-flex-order:4;order:4}.order-5{-webkit-box-ordinal-group:6;-ms-flex-order:5;order:5}.order-6{-webkit-box-ordinal-group:7;-ms-flex-order:6;order:6}.order-7{-webkit-box-ordinal-group:8;-ms-flex-order:7;order:7}.order-8{-webkit-box-ordinal-group:9;-ms-flex-order:8;order:8}.order-9{-webkit-box-ordinal-group:10;-ms-flex-order:9;order:9}.order-10{-webkit-box-ordinal-group:11;-ms-flex-order:10;order:10}.order-11{-webkit-box-ordinal-group:12;-ms-flex-order:11;order:11}.order-12{-webkit-box-ordinal-group:13;-ms-flex-order:12;order:12}@media (min-width:576px){.col-sm{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-sm-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-sm-1{-webkit-box-flex:0;-ms-flex:0 0 8.33333%;flex:0 0 8.33333%;max-width:8.33333%}.col-sm-2{-webkit-box-flex:0;-ms-flex:0 0 16.66667%;flex:0 0 16.66667%;max-width:16.66667%}.col-sm-3{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-4{-webkit-box-flex:0;-ms-flex:0 0 33.33333%;flex:0 0 33.33333%;max-width:33.33333%}.col-sm-5{-webkit-box-flex:0;-ms-flex:0 0 41.66667%;flex:0 0 41.66667%;max-width:41.66667%}.col-sm-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-sm-7{-webkit-box-flex:0;-ms-flex:0 0 58.33333%;flex:0 0 58.33333%;max-width:58.33333%}.col-sm-8{-webkit-box-flex:0;-ms-flex:0 0 66.66667%;flex:0 0 66.66667%;max-width:66.66667%}.col-sm-9{-webkit-box-flex:0;-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-sm-10{-webkit-box-flex:0;-ms-flex:0 0 83.33333%;flex:0 0 83.33333%;max-width:83.33333%}.col-sm-11{-webkit-box-flex:0;-ms-flex:0 0 91.66667%;flex:0 0 91.66667%;max-width:91.66667%}.col-sm-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-sm-1{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.order-sm-2{-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2}.order-sm-3{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.order-sm-4{-webkit-box-ordinal-group:5;-ms-flex-order:4;order:4}.order-sm-5{-webkit-box-ordinal-group:6;-ms-flex-order:5;order:5}.order-sm-6{-webkit-box-ordinal-group:7;-ms-flex-order:6;order:6}.order-sm-7{-webkit-box-ordinal-group:8;-ms-flex-order:7;order:7}.order-sm-8{-webkit-box-ordinal-group:9;-ms-flex-order:8;order:8}.order-sm-9{-webkit-box-ordinal-group:10;-ms-flex-order:9;order:9}.order-sm-10{-webkit-box-ordinal-group:11;-ms-flex-order:10;order:10}.order-sm-11{-webkit-box-ordinal-group:12;-ms-flex-order:11;order:11}.order-sm-12{-webkit-box-ordinal-group:13;-ms-flex-order:12;order:12}}@media (min-width:768px){.col-md{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-md-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-md-1{-webkit-box-flex:0;-ms-flex:0 0 8.33333%;flex:0 0 8.33333%;max-width:8.33333%}.col-md-2{-webkit-box-flex:0;-ms-flex:0 0 16.66667%;flex:0 0 16.66667%;max-width:16.66667%}.col-md-3{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-md-4{-webkit-box-flex:0;-ms-flex:0 0 33.33333%;flex:0 0 33.33333%;max-width:33.33333%}.col-md-5{-webkit-box-flex:0;-ms-flex:0 0 41.66667%;flex:0 0 41.66667%;max-width:41.66667%}.col-md-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-md-7{-webkit-box-flex:0;-ms-flex:0 0 58.33333%;flex:0 0 58.33333%;max-width:58.33333%}.col-md-8{-webkit-box-flex:0;-ms-flex:0 0 66.66667%;flex:0 0 66.66667%;max-width:66.66667%}.col-md-9{-webkit-box-flex:0;-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-md-10{-webkit-box-flex:0;-ms-flex:0 0 83.33333%;flex:0 0 83.33333%;max-width:83.33333%}.col-md-11{-webkit-box-flex:0;-ms-flex:0 0 91.66667%;flex:0 0 91.66667%;max-width:91.66667%}.col-md-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-md-1{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.order-md-2{-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2}.order-md-3{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.order-md-4{-webkit-box-ordinal-group:5;-ms-flex-order:4;order:4}.order-md-5{-webkit-box-ordinal-group:6;-ms-flex-order:5;order:5}.order-md-6{-webkit-box-ordinal-group:7;-ms-flex-order:6;order:6}.order-md-7{-webkit-box-ordinal-group:8;-ms-flex-order:7;order:7}.order-md-8{-webkit-box-ordinal-group:9;-ms-flex-order:8;order:8}.order-md-9{-webkit-box-ordinal-group:10;-ms-flex-order:9;order:9}.order-md-10{-webkit-box-ordinal-group:11;-ms-flex-order:10;order:10}.order-md-11{-webkit-box-ordinal-group:12;-ms-flex-order:11;order:11}.order-md-12{-webkit-box-ordinal-group:13;-ms-flex-order:12;order:12}}@media (min-width:1200px){.col-lg{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-lg-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-lg-1{-webkit-box-flex:0;-ms-flex:0 0 8.33333%;flex:0 0 8.33333%;max-width:8.33333%}.col-lg-2{-webkit-box-flex:0;-ms-flex:0 0 16.66667%;flex:0 0 16.66667%;max-width:16.66667%}.col-lg-3{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-lg-4{-webkit-box-flex:0;-ms-flex:0 0 33.33333%;flex:0 0 33.33333%;max-width:33.33333%}.col-lg-5{-webkit-box-flex:0;-ms-flex:0 0 41.66667%;flex:0 0 41.66667%;max-width:41.66667%}.col-lg-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-lg-7{-webkit-box-flex:0;-ms-flex:0 0 58.33333%;flex:0 0 58.33333%;max-width:58.33333%}.col-lg-8{-webkit-box-flex:0;-ms-flex:0 0 66.66667%;flex:0 0 66.66667%;max-width:66.66667%}.col-lg-9{-webkit-box-flex:0;-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-lg-10{-webkit-box-flex:0;-ms-flex:0 0 83.33333%;flex:0 0 83.33333%;max-width:83.33333%}.col-lg-11{-webkit-box-flex:0;-ms-flex:0 0 91.66667%;flex:0 0 91.66667%;max-width:91.66667%}.col-lg-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-lg-1{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.order-lg-2{-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2}.order-lg-3{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.order-lg-4{-webkit-box-ordinal-group:5;-ms-flex-order:4;order:4}.order-lg-5{-webkit-box-ordinal-group:6;-ms-flex-order:5;order:5}.order-lg-6{-webkit-box-ordinal-group:7;-ms-flex-order:6;order:6}.order-lg-7{-webkit-box-ordinal-group:8;-ms-flex-order:7;order:7}.order-lg-8{-webkit-box-ordinal-group:9;-ms-flex-order:8;order:8}.order-lg-9{-webkit-box-ordinal-group:10;-ms-flex-order:9;order:9}.order-lg-10{-webkit-box-ordinal-group:11;-ms-flex-order:10;order:10}.order-lg-11{-webkit-box-ordinal-group:12;-ms-flex-order:11;order:11}.order-lg-12{-webkit-box-ordinal-group:13;-ms-flex-order:12;order:12}.col-xl{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-xl-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-xl-1{-webkit-box-flex:0;-ms-flex:0 0 8.33333%;flex:0 0 8.33333%;max-width:8.33333%}.col-xl-2{-webkit-box-flex:0;-ms-flex:0 0 16.66667%;flex:0 0 16.66667%;max-width:16.66667%}.col-xl-3{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-xl-4{-webkit-box-flex:0;-ms-flex:0 0 33.33333%;flex:0 0 33.33333%;max-width:33.33333%}.col-xl-5{-webkit-box-flex:0;-ms-flex:0 0 41.66667%;flex:0 0 41.66667%;max-width:41.66667%}.col-xl-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-xl-7{-webkit-box-flex:0;-ms-flex:0 0 58.33333%;flex:0 0 58.33333%;max-width:58.33333%}.col-xl-8{-webkit-box-flex:0;-ms-flex:0 0 66.66667%;flex:0 0 66.66667%;max-width:66.66667%}.col-xl-9{-webkit-box-flex:0;-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-xl-10{-webkit-box-flex:0;-ms-flex:0 0 83.33333%;flex:0 0 83.33333%;max-width:83.33333%}.col-xl-11{-webkit-box-flex:0;-ms-flex:0 0 91.66667%;flex:0 0 91.66667%;max-width:91.66667%}.col-xl-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-xl-1{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.order-xl-2{-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2}.order-xl-3{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.order-xl-4{-webkit-box-ordinal-group:5;-ms-flex-order:4;order:4}.order-xl-5{-webkit-box-ordinal-group:6;-ms-flex-order:5;order:5}.order-xl-6{-webkit-box-ordinal-group:7;-ms-flex-order:6;order:6}.order-xl-7{-webkit-box-ordinal-group:8;-ms-flex-order:7;order:7}.order-xl-8{-webkit-box-ordinal-group:9;-ms-flex-order:8;order:8}.order-xl-9{-webkit-box-ordinal-group:10;-ms-flex-order:9;order:9}.order-xl-10{-webkit-box-ordinal-group:11;-ms-flex-order:10;order:10}.order-xl-11{-webkit-box-ordinal-group:12;-ms-flex-order:11;order:11}.order-xl-12{-webkit-box-ordinal-group:13;-ms-flex-order:12;order:12}}html{font-size:16px}.table{width:100%;max-width:100%;margin-bottom:1rem;background-color:transparent}.table td,.table th{padding:.75rem;vertical-align:top;border-top:1px solid #e9ecef}.table thead th{vertical-align:bottom;border-bottom:2px solid #e9ecef}.table tbody+tbody{border-top:2px solid #e9ecef}.table .table{background-color:#fff}.table-sm td,.table-sm th{padding:.3rem}.table-bordered,.table-bordered td,.table-bordered th{border:1px solid #e9ecef}.table-bordered thead td,.table-bordered thead th{border-bottom-width:2px}.table-striped tbody tr:nth-of-type(odd){background-color:rgba(0,0,0,.05)}.table-hover tbody tr:hover{background-color:rgba(0,0,0,.075)}.table-primary,.table-primary>td,.table-primary>th{background-color:#ffd9b8}.table-hover .table-primary:hover,.table-hover .table-primary:hover>td,.table-hover .table-primary:hover>th{background-color:#ffcb9f}.table-secondary,.table-secondary>td,.table-secondary>th{background-color:#c4edf3}.table-hover .table-secondary:hover,.table-hover .table-secondary:hover>td,.table-hover .table-secondary:hover>th{background-color:#afe7ef}.table-success,.table-success>td,.table-success>th{background-color:#c3e6cb}.table-hover .table-success:hover,.table-hover .table-success:hover>td,.table-hover .table-success:hover>th{background-color:#b1dfbb}.table-info,.table-info>td,.table-info>th{background-color:#bee5eb}.table-hover .table-info:hover,.table-hover .table-info:hover>td,.table-hover .table-info:hover>th{background-color:#abdde5}.table-warning,.table-warning>td,.table-warning>th{background-color:#ffeeba}.table-hover .table-warning:hover,.table-hover .table-warning:hover>td,.table-hover .table-warning:hover>th{background-color:#ffe8a1}.table-danger,.table-danger>td,.table-danger>th{background-color:#f5c6cb}.table-hover .table-danger:hover,.table-hover .table-danger:hover>td,.table-hover .table-danger:hover>th{background-color:#f1b0b7}.table-light,.table-light>td,.table-light>th{background-color:#fdfdfe}.table-hover .table-light:hover,.table-hover .table-light:hover>td,.table-hover .table-light:hover>th{background-color:#ececf6}.table-dark,.table-dark>td,.table-dark>th{background-color:#c6c8ca}.table-hover .table-dark:hover,.table-hover .table-dark:hover>td,.table-hover .table-dark:hover>th{background-color:#b9bbbe}.table-active,.table-active>td,.table-active>th,.table-hover .table-active:hover,.table-hover .table-active:hover>td,.table-hover .table-active:hover>th{background-color:rgba(0,0,0,.075)}.thead-inverse th{color:#fff;background-color:#212529}.thead-default th{color:#495057;background-color:#e9ecef}.table-inverse{color:#fff;background-color:#212529}.table-inverse td,.table-inverse th,.table-inverse thead th{border-color:#32383e}.table-inverse.table-bordered{border:0}.table-inverse.table-striped tbody tr:nth-of-type(odd){background-color:rgba(255,255,255,.05)}.table-inverse.table-hover tbody tr:hover{background-color:rgba(255,255,255,.075)}@media (max-width:1199px){.table-responsive{display:block;width:100%;overflow-x:auto;-ms-overflow-style:-ms-autohiding-scrollbar}.table-responsive.table-bordered{border:0}}.form-control{display:block;width:100%;padding:.5rem .75rem;font-size:16px;line-height:1.25;color:#495057;background-color:#fff;background-image:none;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem;-webkit-transition:border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out}.form-control::-ms-expand{background-color:transparent;border:0}.form-control:focus{color:#495057;background-color:#fff;border-color:#ffbc80;outline:0}.form-control::-webkit-input-placeholder{color:#868e96;opacity:1}.form-control::-moz-placeholder{color:#868e96;opacity:1}.form-control::-ms-input-placeholder{color:#868e96;opacity:1}.form-control::placeholder{color:#868e96;opacity:1}.form-control:disabled,.form-control[readonly]{background-color:#e9ecef;opacity:1}select.form-control:not([size]):not([multiple]){height:calc(2.25rem + 2px)}select.form-control:focus::-ms-value{color:#495057;background-color:#fff}.form-control-file,.form-control-range{display:block}.col-form-label{padding-top:calc(.5rem - 1px * 2);padding-bottom:calc(.5rem - 1px * 2);margin-bottom:0}.col-form-label-lg{padding-top:calc(.5rem - 1px * 2);padding-bottom:calc(.5rem - 1px * 2);font-size:1.25rem}.col-form-label-sm{padding-top:calc(.25rem - 1px * 2);padding-bottom:calc(.25rem - 1px * 2);font-size:.875rem}.col-form-legend{padding-top:.5rem;padding-bottom:.5rem;margin-bottom:0;font-size:16px}.form-control-plaintext{padding-top:.5rem;padding-bottom:.5rem;margin-bottom:0;line-height:1.25;border:solid transparent;border-width:1px 0}.form-control-plaintext.form-control-lg,.form-control-plaintext.form-control-sm,.input-group-lg>.form-control-plaintext.form-control,.input-group-lg>.form-control-plaintext.input-group-addon,.input-group-lg>.input-group-btn>.form-control-plaintext.btn,.input-group-sm>.form-control-plaintext.form-control,.input-group-sm>.form-control-plaintext.input-group-addon,.input-group-sm>.input-group-btn>.form-control-plaintext.btn{padding-right:0;padding-left:0}.form-control-sm,.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem}.input-group-sm>.input-group-btn>select.btn:not([size]):not([multiple]),.input-group-sm>select.form-control:not([size]):not([multiple]),.input-group-sm>select.input-group-addon:not([size]):not([multiple]),select.form-control-sm:not([size]):not([multiple]){height:calc(1.8125rem + 2px)}.form-control-lg,.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem}.input-group-lg>.input-group-btn>select.btn:not([size]):not([multiple]),.input-group-lg>select.form-control:not([size]):not([multiple]),.input-group-lg>select.input-group-addon:not([size]):not([multiple]),select.form-control-lg:not([size]):not([multiple]){height:calc(2.875rem + 2px)}.form-group{margin-bottom:1rem}.form-text{display:block;margin-top:.25rem}.form-row{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-5px;margin-left:-5px}.form-row>.col,.form-row>[class*=col-]{padding-right:5px;padding-left:5px}.form-check{position:relative;display:block;margin-bottom:.5rem}.form-check.disabled .form-check-label{color:#868e96}.form-check-label{padding-left:1.25rem;margin-bottom:0}.form-check-input{position:absolute;margin-top:.25rem;margin-left:-1.25rem}.form-check-inline{display:inline-block;margin-right:.75rem}.form-check-inline .form-check-label{vertical-align:middle}.invalid-tooltip{position:absolute;top:100%;z-index:5;display:none;width:250px;padding:.5rem;margin-top:.1rem;font-size:.875rem;line-height:1;color:#fff;background-color:rgba(220,53,69,.8);border-radius:.2rem}.custom-select.is-valid,.form-control.is-valid,.was-validated .custom-select:valid,.was-validated .form-control:valid{border-color:#28a745}.custom-select.is-valid:focus,.form-control.is-valid:focus,.was-validated .custom-select:valid:focus,.was-validated .form-control:valid:focus{-webkit-box-shadow:0 0 0 .2rem rgba(40,167,69,.25);box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.custom-select.is-valid~.valid-feedback,.custom-select.is-valid~.valid-tooltip,.form-control.is-valid~.valid-feedback,.form-control.is-valid~.valid-tooltip,.was-validated .custom-select:valid~.valid-feedback,.was-validated .custom-select:valid~.valid-tooltip,.was-validated .form-control:valid~.valid-feedback,.was-validated .form-control:valid~.valid-tooltip{display:block}.form-check-input.is-valid+.form-check-label,.was-validated .form-check-input:valid+.form-check-label{color:#28a745}.custom-control-input.is-valid~.custom-control-indicator,.was-validated .custom-control-input:valid~.custom-control-indicator{background-color:rgba(40,167,69,.25)}.custom-control-input.is-valid~.custom-control-description,.was-validated .custom-control-input:valid~.custom-control-description{color:#28a745}.custom-file-input.is-valid~.custom-file-control,.was-validated .custom-file-input:valid~.custom-file-control{border-color:#28a745}.custom-file-input.is-valid~.custom-file-control::before,.was-validated .custom-file-input:valid~.custom-file-control::before{border-color:inherit}.custom-file-input.is-valid:focus,.was-validated .custom-file-input:valid:focus{-webkit-box-shadow:0 0 0 .2rem rgba(40,167,69,.25);box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.custom-select.is-invalid,.form-control.is-invalid,.was-validated .custom-select:invalid,.was-validated .form-control:invalid{border-color:#dc3545}.custom-select.is-invalid:focus,.form-control.is-invalid:focus,.was-validated .custom-select:invalid:focus,.was-validated .form-control:invalid:focus{-webkit-box-shadow:0 0 0 .2rem rgba(220,53,69,.25);box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.custom-select.is-invalid~.invalid-feedback,.custom-select.is-invalid~.invalid-tooltip,.form-control.is-invalid~.invalid-feedback,.form-control.is-invalid~.invalid-tooltip,.was-validated .custom-select:invalid~.invalid-feedback,.was-validated .custom-select:invalid~.invalid-tooltip,.was-validated .form-control:invalid~.invalid-feedback,.was-validated .form-control:invalid~.invalid-tooltip{display:block}.form-check-input.is-invalid+.form-check-label,.was-validated .form-check-input:invalid+.form-check-label{color:#dc3545}.custom-control-input.is-invalid~.custom-control-indicator,.was-validated .custom-control-input:invalid~.custom-control-indicator{background-color:rgba(220,53,69,.25)}.custom-control-input.is-invalid~.custom-control-description,.was-validated .custom-control-input:invalid~.custom-control-description{color:#dc3545}.custom-file-input.is-invalid~.custom-file-control,.was-validated .custom-file-input:invalid~.custom-file-control{border-color:#dc3545}.custom-file-input.is-invalid~.custom-file-control::before,.was-validated .custom-file-input:invalid~.custom-file-control::before{border-color:inherit}.custom-file-input.is-invalid:focus,.was-validated .custom-file-input:invalid:focus{-webkit-box-shadow:0 0 0 .2rem rgba(220,53,69,.25);box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.form-inline{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.form-inline .form-check{width:100%}@media (min-width:576px){.form-inline label{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-bottom:0}.form-inline .form-group{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-bottom:0}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-plaintext{display:inline-block}.form-inline .input-group{width:auto}.form-inline .form-control-label{margin-bottom:0;vertical-align:middle}.form-inline .form-check{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;width:auto;margin-top:0;margin-bottom:0}.form-inline .form-check-label{padding-left:0}.form-inline .form-check-input{position:relative;margin-top:0;margin-right:.25rem;margin-left:0}.form-inline .custom-control{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding-left:0}.form-inline .custom-control-indicator{position:static;display:inline-block;margin-right:.25rem;vertical-align:text-bottom}.form-inline .has-feedback .form-control-feedback{top:0}}.btn{display:inline-block;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;-webkit-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out}.btn:focus,.btn:hover{text-decoration:none}.btn.focus,.btn:focus{outline:0;-webkit-box-shadow:0 0 0 3px rgba(255,120,0,.25);box-shadow:0 0 0 3px rgba(255,120,0,.25)}.btn.disabled,.btn:disabled{opacity:.65}.btn.active,.btn:active{background-image:none}a.btn.disabled,fieldset[disabled] a.btn{pointer-events:none}.btn-link{font-weight:400;color:#ff7800;background-color:transparent;border-radius:0}.btn-link:hover{color:#b35400;text-decoration:underline;background-color:transparent;border-color:transparent}.btn-link.focus,.btn-link:focus{border-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link.disabled,.btn-link:disabled{color:#868e96}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:.5rem}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.fade{opacity:0;-webkit-transition:opacity .15s linear;transition:opacity .15s linear}.fade.show{opacity:1}.collapse{display:none}.collapse.show{display:block}tr.collapse.show{display:table-row}tbody.collapse.show{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition:height .35s;transition:height .35s}.dropdown,.dropup{position:relative}.dropdown-toggle::after{display:inline-block;width:0;height:0;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-left:.3em solid transparent}.dropdown-toggle:empty::after{margin-left:0}.dropup .dropdown-menu{margin-bottom:.125rem}.dropup .dropdown-toggle::after{border-top:0;border-bottom:.3em solid}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:16px;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:8px}.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid #e9ecef}.dropdown-item{display:block;width:100%;padding:.25rem 1.5rem;clear:both;font-weight:400;color:#212529;text-align:inherit;white-space:nowrap;background:0 0;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#16181b;text-decoration:none;background-color:#f8f9fa}.dropdown-item.active,.dropdown-item:active{color:#fff;text-decoration:none;background-color:#ff7800}.dropdown-item.disabled,.dropdown-item:disabled{color:#868e96;background-color:transparent}.show>a{outline:0}.dropdown-menu.show{display:block}.dropdown-header{display:block;padding:.5rem 1.5rem;margin-bottom:0;font-size:.875rem;color:#868e96;white-space:nowrap}.btn-group,.btn-group-vertical{position:relative;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;-webkit-box-flex:0;-ms-flex:0 1 auto;flex:0 1 auto}.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover{z-index:2}.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group,.btn-group-vertical .btn+.btn,.btn-group-vertical .btn+.btn-group,.btn-group-vertical .btn-group+.btn,.btn-group-vertical .btn-group+.btn-group{margin-left:-1px}.btn-toolbar{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.btn-toolbar .input-group{width:auto}.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}.btn-group>.btn:first-child{margin-left:0}.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.btn-group>.btn-group{float:left}.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-bottom-left-radius:0}.btn+.dropdown-toggle-split{padding-right:.5625rem;padding-left:.5625rem}.btn+.dropdown-toggle-split::after{margin-left:0}.btn-group-sm>.btn+.dropdown-toggle-split,.btn-sm+.dropdown-toggle-split{padding-right:.375rem;padding-left:.375rem}.btn-group-lg>.btn+.dropdown-toggle-split,.btn-lg+.dropdown-toggle-split{padding-right:.75rem;padding-left:.75rem}.btn-group-vertical{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.btn-group-vertical .btn,.btn-group-vertical .btn-group{width:100%}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn:not(:first-child):not(:last-child){border-radius:0}.btn-group-vertical:first-child:not(:last-child){border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical:last-child:not(:first-child){border-top-left-radius:0;border-top-right-radius:0}.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-top-right-radius:0}[data-toggle=buttons]>.btn input[type=checkbox],[data-toggle=buttons]>.btn input[type=radio],[data-toggle=buttons]>.btn-group>.btn input[type=checkbox],[data-toggle=buttons]>.btn-group>.btn input[type=radio]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;width:100%}.input-group .form-control{position:relative;z-index:2;-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;width:1%;margin-bottom:0}.input-group .form-control:active,.input-group .form-control:focus,.input-group .form-control:hover{z-index:3}.input-group .form-control:not(:first-child):not(:last-child),.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child){border-radius:0}.input-group-addon,.input-group-btn{white-space:nowrap}.input-group-addon{padding:.5rem .75rem;margin-bottom:0;font-size:16px;font-weight:400;line-height:1.25;color:#495057;text-align:center;background-color:#e9ecef;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.input-group-addon.form-control-sm,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.input-group-addon.btn{padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem}.input-group-addon.form-control-lg,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.input-group-addon.btn{padding:.5rem 1rem;font-size:1.25rem;border-radius:.3rem}.input-group-addon input[type=checkbox],.input-group-addon input[type=radio]{margin-top:0}.input-group .form-control:not(:last-child),.input-group-addon:not(:last-child),.input-group-btn:not(:first-child)>.btn-group:not(:last-child)>.btn,.input-group-btn:not(:first-child)>.btn:not(:last-child):not(.dropdown-toggle),.input-group-btn:not(:last-child)>.btn,.input-group-btn:not(:last-child)>.btn-group>.btn,.input-group-btn:not(:last-child)>.dropdown-toggle{border-top-right-radius:0;border-bottom-right-radius:0}.input-group-addon:not(:last-child){border-right:0}.input-group .form-control:not(:first-child),.input-group-addon:not(:first-child),.input-group-btn:not(:first-child)>.btn,.input-group-btn:not(:first-child)>.btn-group>.btn,.input-group-btn:not(:first-child)>.dropdown-toggle,.input-group-btn:not(:last-child)>.btn-group:not(:first-child)>.btn,.input-group-btn:not(:last-child)>.btn:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.form-control+.input-group-addon:not(:first-child){border-left:0}.input-group-btn{position:relative;font-size:0;white-space:nowrap}.input-group-btn>.btn{position:relative;background-clip:padding-box;border:1px solid rgba(0,0,0,.15)}.input-group-btn>.btn+.btn{margin-left:-1px}.input-group-btn>.btn:active,.input-group-btn>.btn:focus,.input-group-btn>.btn:hover{z-index:3}.input-group-btn:not(:last-child)>.btn,.input-group-btn:not(:last-child)>.btn-group{margin-right:-1px}.input-group-btn:not(:first-child)>.btn,.input-group-btn:not(:first-child)>.btn-group{z-index:2;margin-left:-1px}.input-group-btn:not(:first-child)>.btn-group:active,.input-group-btn:not(:first-child)>.btn-group:focus,.input-group-btn:not(:first-child)>.btn-group:hover,.input-group-btn:not(:first-child)>.btn:active,.input-group-btn:not(:first-child)>.btn:focus,.input-group-btn:not(:first-child)>.btn:hover{z-index:3}.custom-control{position:relative;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;min-height:1.5;margin-right:1rem}.custom-control-input{position:absolute;z-index:-1;opacity:0}.custom-control-input:checked~.custom-control-indicator{color:#fff}.custom-control-input:focus~.custom-control-indicator{-webkit-box-shadow:0 0 0 1px #fff,0 0 0 3px #ff7800;box-shadow:0 0 0 1px #fff,0 0 0 3px #ff7800}.custom-control-input:active~.custom-control-indicator{color:#fff}.custom-control-indicator{position:absolute;left:0;display:block;pointer-events:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-repeat:no-repeat;background-position:center center;background-size:50% 50%}.custom-checkbox .custom-control-indicator{border-radius:.25rem}.custom-radio .custom-control-indicator{border-radius:50%}.custom-controls-stacked{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.custom-controls-stacked .custom-control{margin-bottom:.25rem}.custom-controls-stacked .custom-control+.custom-control{margin-left:0}.custom-select{display:inline-block;max-width:100%;height:calc(2.25rem + 2px);padding:.375rem 1.75rem .375rem .75rem;line-height:1.25;color:#495057;vertical-align:middle;background:url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23333' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") right .75rem center/8px 10px no-repeat padding-box #fff;border:1px solid rgba(0,0,0,.15);border-radius:.25rem;-webkit-appearance:none;-moz-appearance:none;appearance:none}.custom-select:focus{border-color:#ffbc80;outline:0}.custom-select:focus::-ms-value{color:#495057;background-color:#fff}.custom-select:disabled{color:#868e96;background-color:#e9ecef}.custom-select::-ms-expand{opacity:0}.custom-select-sm{height:calc(1.8125rem + 2px);padding-top:.375rem;padding-bottom:.375rem;font-size:75%}.custom-file{position:relative;display:inline-block;max-width:100%;height:calc(2.25rem + 2px);margin-bottom:0}.custom-file-input{min-width:14rem;max-width:100%;height:calc(2.25rem + 2px);margin:0;opacity:0}.custom-file-input:focus~.custom-file-control{-webkit-box-shadow:0 0 0 .075rem #fff,0 0 0 .2rem #ff7800;box-shadow:0 0 0 .075rem #fff,0 0 0 .2rem #ff7800}.custom-file-control{position:absolute;top:0;right:0;left:0;z-index:5;height:calc(2.25rem + 2px);padding:.5rem .75rem;overflow:hidden;line-height:1.25;color:#495057;pointer-events:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.custom-file-control:lang(en):empty::after{content:"Choose file..."}.custom-file-control::before{position:absolute;top:0;right:0;z-index:6;display:block;height:calc(2.25rem + 2px);padding:.5rem .75rem;line-height:1.25;color:#495057;background-color:#e9ecef;border-left:1px solid rgba(0,0,0,.15)}.custom-file-control:lang(en)::before{content:"Browse"}.nav{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem}.nav-link:focus,.nav-link:hover{text-decoration:none}.nav-link.disabled{color:#868e96}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs .nav-item{margin-bottom:-1px}.nav-tabs .nav-link{border:1px solid transparent;border-top-left-radius:.25rem;border-top-right-radius:.25rem}.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#e9ecef #e9ecef #ddd}.nav-tabs .nav-link.disabled{color:#868e96;background-color:transparent;border-color:transparent}.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#495057;background-color:#fff;border-color:#ddd #ddd #fff}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.nav-pills .nav-link{border-radius:.25rem}.nav-pills .nav-link.active,.show>.nav-pills .nav-link{color:#fff;background-color:#ff7800}.nav-fill .nav-item{-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;text-align:center}.nav-justified .nav-item{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;text-align:center}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.navbar{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.navbar>.container,.navbar>.container-fluid{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.navbar-brand{display:inline-block;margin-right:1rem;font-size:1.25rem;line-height:inherit;white-space:nowrap}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-nav{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-text{display:inline-block;padding-top:.5rem;padding-bottom:.5rem}.navbar-collapse{-ms-flex-preferred-size:100%;flex-basis:100%;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background:0 0;border:1px solid transparent;border-radius:.25rem}.navbar-toggler:focus,.navbar-toggler:hover{text-decoration:none}.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;content:"";background:center center/100% 100% no-repeat}@media (max-width:575px){.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:576px){.navbar-expand-sm{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-sm .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm .navbar-nav .dropdown-menu-right{right:0;left:auto}.navbar-expand-sm .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-sm .navbar-collapse{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.navbar-expand-sm .navbar-toggler{display:none}}@media (max-width:767px){.navbar-expand-md>.container,.navbar-expand-md>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:768px){.navbar-expand-md{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-md .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .dropdown-menu-right{right:0;left:auto}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md>.container,.navbar-expand-md>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-md .navbar-collapse{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.navbar-expand-md .navbar-toggler{display:none}}@media (max-width:1199px){.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid,.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:1200px){.navbar-expand-lg{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-lg .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-lg .navbar-nav .dropdown-menu-right{right:0;left:auto}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-lg .navbar-collapse{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.navbar-expand-lg .navbar-toggler{display:none}.navbar-expand-xl{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-xl .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.navbar-expand-xl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xl .navbar-nav .dropdown-menu-right{right:0;left:auto}.navbar-expand-xl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-xl .navbar-collapse{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.navbar-expand-xl .navbar-toggler{display:none}}.navbar-expand{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.navbar-expand .navbar-nav .dropdown-menu{position:absolute}.navbar-expand .navbar-nav .dropdown-menu-right{right:0;left:auto}.navbar-expand .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand>.container,.navbar-expand>.container-fluid{padding-right:0;padding-left:0;-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand .navbar-collapse{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.navbar-expand .navbar-toggler{display:none}.navbar-light .navbar-brand,.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover{color:rgba(0,0,0,.9)}.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.5)}.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7)}.navbar-light .navbar-nav .nav-link.disabled{color:rgba(0,0,0,.3)}.navbar-light .navbar-nav .active>.nav-link,.navbar-light .navbar-nav .nav-link.active,.navbar-light .navbar-nav .nav-link.show,.navbar-light .navbar-nav .show>.nav-link{color:rgba(0,0,0,.9)}.navbar-light .navbar-toggler{color:rgba(0,0,0,.5);border-color:rgba(0,0,0,.1)}.navbar-light .navbar-toggler-icon{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0,0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")}.navbar-light .navbar-text{color:rgba(0,0,0,.5)}.navbar-dark .navbar-brand,.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover{color:#fff}.navbar-dark .navbar-nav .nav-link{color:rgba(255,255,255,.5)}.navbar-dark .navbar-nav .nav-link:focus,.navbar-dark .navbar-nav .nav-link:hover{color:rgba(255,255,255,.75)}.navbar-dark .navbar-nav .nav-link.disabled{color:rgba(255,255,255,.25)}.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .show>.nav-link{color:#fff}.navbar-dark .navbar-toggler{color:rgba(255,255,255,.5);border-color:rgba(255,255,255,.1)}.navbar-dark .navbar-toggler-icon{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255,0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")}.navbar-dark .navbar-text{color:rgba(255,255,255,.5)}.tar{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.tar-body{-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;padding:1.25rem}.tar-title{margin-bottom:.75rem}.tar-subtitle{margin-top:-.375rem;margin-bottom:0}.tar-text:last-child{margin-bottom:0}.tar-link:hover{text-decoration:none}.tar-link+.tar-link{margin-left:1.25rem}.tar>.list-group:first-child .list-group-item:first-child{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.tar>.list-group:last-child .list-group-item:last-child{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.tar-header{padding:.75rem 1.25rem;margin-bottom:0;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125)}.tar-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0}.tar-footer{padding:.75rem 1.25rem;background-color:rgba(0,0,0,.03);border-top:1px solid rgba(0,0,0,.125)}.tar-footer:last-child{border-radius:0 0 calc(.25rem - 1px) calc(.25rem - 1px)}.tar-header-tabs{margin-right:-.625rem;margin-bottom:-.75rem;margin-left:-.625rem;border-bottom:0}.tar-header-pills{margin-right:-.625rem;margin-left:-.625rem}.tar-img-overlay{position:absolute;top:0;right:0;bottom:0;left:0;padding:1.25rem}.tar-img{width:100%;border-radius:calc(.25rem - 1px)}.tar-img-top{width:100%;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.tar-img-bottom{width:100%;border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.tar-deck{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.tar-deck .tar{margin-bottom:15px}@media (min-width:576px){.tar-deck{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap;margin-right:-15px;margin-left:-15px}.tar-deck .tar{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-flex:1;-ms-flex:1 0 0%;flex:1 0 0%;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;margin-right:15px;margin-bottom:0;margin-left:15px}}.tar-group{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.tar-group .tar{margin-bottom:15px}.tar-columns .tar{margin-bottom:.75rem}@media (min-width:576px){.tar-group{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap}.tar-group .tar{-webkit-box-flex:1;-ms-flex:1 0 0%;flex:1 0 0%}.tar-group .tar+.tar{margin-bottom:0;margin-left:0;border-left:0}.tar-group .tar:first-child{border-top-right-radius:0;border-bottom-right-radius:0}.tar-group .tar:first-child .tar-img-top{border-top-right-radius:0}.tar-group .tar:first-child .tar-img-bottom{border-bottom-right-radius:0}.tar-group .tar:last-child{border-top-left-radius:0;border-bottom-left-radius:0}.tar-group .tar:last-child .tar-img-top{border-top-left-radius:0}.tar-group .tar:last-child .tar-img-bottom{border-bottom-left-radius:0}.tar-group .tar:not(:first-child):not(:last-child),.tar-group .tar:not(:first-child):not(:last-child) .tar-img-bottom,.tar-group .tar:not(:first-child):not(:last-child) .tar-img-top{border-radius:0}.tar-columns{-webkit-column-count:3;-moz-column-count:3;column-count:3;-webkit-column-gap:1.25rem;-moz-column-gap:1.25rem;column-gap:1.25rem}.tar-columns .tar{display:inline-block;width:100%}}.breadcrumb{padding:.75rem 1rem;margin-bottom:1rem;list-style:none;background-color:#e9ecef;border-radius:8px}.breadcrumb::after{display:block;clear:both;content:""}.breadcrumb-item{float:left}.breadcrumb-item+.breadcrumb-item::before{display:inline-block;padding-right:.5rem;padding-left:.5rem;color:#868e96;content:"/"}.breadcrumb-item+.breadcrumb-item:hover::before{text-decoration:none}.breadcrumb-item.active{color:#868e96}.pagination{display:-webkit-box;display:-ms-flexbox;display:flex;padding-left:0;list-style:none;border-radius:8px}.page-item:first-child .page-link{margin-left:0;border-top-left-radius:8px;border-bottom-left-radius:8px}.page-item:last-child .page-link{border-top-right-radius:8px;border-bottom-right-radius:8px}.page-item.active .page-link{z-index:2;color:#fff;background-color:#ff7800;border-color:#ff7800}.page-item.disabled .page-link{color:#868e96;pointer-events:none;background-color:#fff;border-color:#ddd}.page-link{position:relative;display:block;padding:.5rem .75rem;margin-left:-1px;line-height:1.25;color:#ff7800;background-color:#fff;border:1px solid #ddd}.page-link:focus,.page-link:hover{color:#b35400;text-decoration:none;background-color:#e9ecef;border-color:#ddd}.pagination-lg .page-link{padding:.75rem 1.5rem;font-size:1.25rem;line-height:1.5}.pagination-lg .page-item:first-child .page-link{border-top-left-radius:.3rem;border-bottom-left-radius:.3rem}.pagination-lg .page-item:last-child .page-link{border-top-right-radius:.3rem;border-bottom-right-radius:.3rem}.pagination-sm .page-link{padding:.25rem .5rem;font-size:.875rem;line-height:1.5}.pagination-sm .page-item:first-child .page-link{border-top-left-radius:.2rem;border-bottom-left-radius:.2rem}.pagination-sm .page-item:last-child .page-link{border-top-right-radius:.2rem;border-bottom-right-radius:.2rem}.badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:8px}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.badge-pill{padding-right:.6em;padding-left:.6em;border-radius:10rem}.badge-primary{color:#fff;background-color:#ff7800}.badge-primary[href]:focus,.badge-primary[href]:hover{color:#fff;text-decoration:none;background-color:#cc6000}.badge-secondary{color:#fff;background-color:#2cc0d5}.badge-secondary[href]:focus,.badge-secondary[href]:hover{color:#fff;text-decoration:none;background-color:#229bac}.badge-success{color:#fff;background-color:#28a745}.badge-success[href]:focus,.badge-success[href]:hover{color:#fff;text-decoration:none;background-color:#1e7e34}.badge-info{color:#fff;background-color:#17a2b8}.badge-info[href]:focus,.badge-info[href]:hover{color:#fff;text-decoration:none;background-color:#117a8b}.badge-warning{color:#111;background-color:#ffc107}.badge-warning[href]:focus,.badge-warning[href]:hover{color:#111;text-decoration:none;background-color:#d39e00}.badge-danger{color:#fff;background-color:#dc3545}.badge-danger[href]:focus,.badge-danger[href]:hover{color:#fff;text-decoration:none;background-color:#bd2130}.badge-light{color:#111;background-color:#f8f9fa}.badge-light[href]:focus,.badge-light[href]:hover{color:#111;text-decoration:none;background-color:#dae0e5}.badge-dark{color:#fff;background-color:#343a40}.badge-dark[href]:focus,.badge-dark[href]:hover{color:#fff;text-decoration:none;background-color:#1d2124}.jumbotron{padding:2rem 1rem;margin-bottom:2rem;background-color:#e9ecef;border-radius:.3rem}@media (min-width:576px){.jumbotron{padding:4rem 2rem}}.jumbotron-fluid{padding-right:0;padding-left:0;border-radius:0}.alert-primary{color:#853e00;background-color:#ffe4cc;border-color:#ffd9b8}.alert-primary hr{border-top-color:#ffcb9f}.alert-primary .alert-link{color:#522600}.alert-secondary{color:#17646f;background-color:#d5f2f7;border-color:#c4edf3}.alert-secondary hr{border-top-color:#afe7ef}.alert-secondary .alert-link{color:#0e3e45}.alert-success hr{border-top-color:#b1dfbb}.alert-success .alert-link{color:#0b2e13}.alert-info{color:#0c5460;background-color:#d1ecf1;border-color:#bee5eb}.alert-info hr{border-top-color:#abdde5}.alert-info .alert-link{color:#062c33}.alert-warning hr{border-top-color:#ffe8a1}.alert-warning .alert-link{color:#533f03}.alert-danger{color:#721c24;background-color:#f8d7da;border-color:#f5c6cb}.alert-danger hr{border-top-color:#f1b0b7}.alert-danger .alert-link{color:#491217}.alert-light{color:#818182;background-color:#fefefe;border-color:#fdfdfe}.alert-light hr{border-top-color:#ececf6}.alert-light .alert-link{color:#686868}.alert-dark{color:#1b1e21;background-color:#d6d8d9;border-color:#c6c8ca}.alert-dark hr{border-top-color:#b9bbbe}.alert-dark .alert-link{color:#040505}@-webkit-keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}.progress{display:-webkit-box;display:-ms-flexbox;display:flex;height:1rem;overflow:hidden;font-size:.75rem;background-color:#e9ecef;border-radius:.25rem}.progress-bar{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;color:#fff;background-color:#ff7800}.progress-bar-striped{background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-size:1rem 1rem}.progress-bar-animated{-webkit-animation:1s linear infinite progress-bar-stripes;animation:1s linear infinite progress-bar-stripes}.media{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.media-body{-webkit-box-flex:1;-ms-flex:1;flex:1}.list-group{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0}.list-group-item-action{width:100%;color:#495057;text-align:inherit}.list-group-item-action:focus,.list-group-item-action:hover{color:#495057;text-decoration:none;background-color:#f8f9fa}.list-group-item-action:active{color:#212529;background-color:#e9ecef}.list-group-item{position:relative;display:block;padding:.75rem 1.25rem;margin-bottom:-1px;background-color:#fff;border:1px solid rgba(0,0,0,.125)}.list-group-item:first-child{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.list-group-item:focus,.list-group-item:hover{text-decoration:none}.list-group-item.disabled,.list-group-item:disabled{color:#868e96;background-color:#fff}.list-group-item.active{z-index:2;color:#fff;background-color:#ff7800;border-color:#ff7800}.list-group-flush .list-group-item{border-right:0;border-left:0;border-radius:0}.list-group-flush:first-child .list-group-item:first-child{border-top:0}.list-group-flush:last-child .list-group-item:last-child{border-bottom:0}.list-group-item-primary{color:#853e00;background-color:#ffd9b8}a.list-group-item-primary,button.list-group-item-primary{color:#853e00}a.list-group-item-primary:focus,a.list-group-item-primary:hover,button.list-group-item-primary:focus,button.list-group-item-primary:hover{color:#853e00;background-color:#ffcb9f}a.list-group-item-primary.active,button.list-group-item-primary.active{color:#fff;background-color:#853e00;border-color:#853e00}.list-group-item-secondary{color:#17646f;background-color:#c4edf3}a.list-group-item-secondary,button.list-group-item-secondary{color:#17646f}a.list-group-item-secondary:focus,a.list-group-item-secondary:hover,button.list-group-item-secondary:focus,button.list-group-item-secondary:hover{color:#17646f;background-color:#afe7ef}a.list-group-item-secondary.active,button.list-group-item-secondary.active{color:#fff;background-color:#17646f;border-color:#17646f}.list-group-item-success{color:#155724;background-color:#c3e6cb}a.list-group-item-success,button.list-group-item-success{color:#155724}a.list-group-item-success:focus,a.list-group-item-success:hover,button.list-group-item-success:focus,button.list-group-item-success:hover{color:#155724;background-color:#b1dfbb}a.list-group-item-success.active,button.list-group-item-success.active{color:#fff;background-color:#155724;border-color:#155724}.list-group-item-info{color:#0c5460;background-color:#bee5eb}a.list-group-item-info,button.list-group-item-info{color:#0c5460}a.list-group-item-info:focus,a.list-group-item-info:hover,button.list-group-item-info:focus,button.list-group-item-info:hover{color:#0c5460;background-color:#abdde5}a.list-group-item-info.active,button.list-group-item-info.active{color:#fff;background-color:#0c5460;border-color:#0c5460}.list-group-item-warning{color:#856404;background-color:#ffeeba}a.list-group-item-warning,button.list-group-item-warning{color:#856404}a.list-group-item-warning:focus,a.list-group-item-warning:hover,button.list-group-item-warning:focus,button.list-group-item-warning:hover{color:#856404;background-color:#ffe8a1}a.list-group-item-warning.active,button.list-group-item-warning.active{color:#fff;background-color:#856404;border-color:#856404}.list-group-item-danger{color:#721c24;background-color:#f5c6cb}a.list-group-item-danger,button.list-group-item-danger{color:#721c24}a.list-group-item-danger:focus,a.list-group-item-danger:hover,button.list-group-item-danger:focus,button.list-group-item-danger:hover{color:#721c24;background-color:#f1b0b7}a.list-group-item-danger.active,button.list-group-item-danger.active{color:#fff;background-color:#721c24;border-color:#721c24}.list-group-item-light{color:#818182;background-color:#fdfdfe}a.list-group-item-light,button.list-group-item-light{color:#818182}a.list-group-item-light:focus,a.list-group-item-light:hover,button.list-group-item-light:focus,button.list-group-item-light:hover{color:#818182;background-color:#ececf6}a.list-group-item-light.active,button.list-group-item-light.active{color:#fff;background-color:#818182;border-color:#818182}.list-group-item-dark{color:#1b1e21;background-color:#c6c8ca}a.list-group-item-dark,button.list-group-item-dark{color:#1b1e21}a.list-group-item-dark:focus,a.list-group-item-dark:hover,button.list-group-item-dark:focus,button.list-group-item-dark:hover{color:#1b1e21;background-color:#b9bbbe}a.list-group-item-dark.active,button.list-group-item-dark.active{color:#fff;background-color:#1b1e21;border-color:#1b1e21}.close{float:right;font-size:1.5rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5}.close:focus,.close:hover{color:#000;text-decoration:none;opacity:.75}button.close{padding:0;background:0 0;border:0;-webkit-appearance:none}.modal-open{overflow:hidden}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;overflow:hidden;outline:0}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;transition:transform .3s ease-out;transition:transform .3s ease-out,-webkit-transform .3s ease-out;-webkit-transform:translate(0,-25%);transform:translate(0,-25%)}.modal.show .modal-dialog{-webkit-transform:translate(0,0);transform:translate(0,0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:10px}.modal-content{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;background-color:#fff;background-clip:padding-box;outline:0}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-header{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:15px;border-bottom:1px solid #e9ecef}.modal-header .close{margin-left:auto}.modal-title{margin-bottom:0;line-height:1.5}.modal-body{position:relative;-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;padding:15px}.modal-footer{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;padding:15px;border-top:1px solid #e9ecef}.modal-footer>:not(:first-child){margin-left:.25rem}.modal-footer>:not(:last-child){margin-right:.25rem}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:576px){.modal-dialog{max-width:576px!important;margin:30px auto}.modal-sm{max-width:288px!important}}@media (min-width:1200px){.modal-lg{max-width:800px!important}}.tooltip{position:absolute;z-index:1070;display:block;margin:0;font-family:Flexo;font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;opacity:0}.tooltip.show{opacity:.9}.tooltip .arrow{position:absolute;display:block;width:5px;height:5px}.tooltip.bs-tooltip-auto[x-placement^=top],.tooltip.bs-tooltip-top{padding:5px 0}.tooltip.bs-tooltip-auto[x-placement^=top] .arrow,.tooltip.bs-tooltip-top .arrow{bottom:0}.tooltip.bs-tooltip-auto[x-placement^=top] .arrow::before,.tooltip.bs-tooltip-top .arrow::before{margin-left:-3px;content:"";border-width:5px 5px 0;border-top-color:#000}.tooltip.bs-tooltip-auto[x-placement^=right],.tooltip.bs-tooltip-right{padding:0 5px}.tooltip.bs-tooltip-auto[x-placement^=right] .arrow,.tooltip.bs-tooltip-right .arrow{left:0}.tooltip.bs-tooltip-auto[x-placement^=right] .arrow::before,.tooltip.bs-tooltip-right .arrow::before{margin-top:-3px;content:"";border-width:5px 5px 5px 0;border-right-color:#000}.tooltip.bs-tooltip-auto[x-placement^=bottom],.tooltip.bs-tooltip-bottom{padding:5px 0}.tooltip.bs-tooltip-auto[x-placement^=bottom] .arrow,.tooltip.bs-tooltip-bottom .arrow{top:0}.tooltip.bs-tooltip-auto[x-placement^=bottom] .arrow::before,.tooltip.bs-tooltip-bottom .arrow::before{margin-left:-3px;content:"";border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bs-tooltip-auto[x-placement^=left],.tooltip.bs-tooltip-left{padding:0 5px}.tooltip.bs-tooltip-auto[x-placement^=left] .arrow,.tooltip.bs-tooltip-left .arrow{right:0}.tooltip.bs-tooltip-auto[x-placement^=left] .arrow::before,.tooltip.bs-tooltip-left .arrow::before{right:0;margin-top:-3px;content:"";border-width:5px 0 5px 5px;border-left-color:#000}.tooltip .arrow::before{position:absolute;border-color:transparent;border-style:solid}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;background-color:#000;border-radius:8px}.popover{top:0;left:0;z-index:1060;display:block;max-width:276px;padding:1px;font-family:Flexo;font-style:normal;font-weight:400;line-height:1.5;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;word-wrap:break-word;background-clip:padding-box;border:1px solid rgba(0,0,0,.2)}.popover .arrow{position:absolute;display:block;width:10px;height:5px}.popover .arrow::after,.popover .arrow::before{position:absolute;display:block;content:"";border:11px solid transparent}.popover.bs-popover-auto[x-placement^=top],.popover.bs-popover-top{margin-bottom:10px}.popover.bs-popover-auto[x-placement^=top] .arrow,.popover.bs-popover-top .arrow{bottom:0}.popover.bs-popover-auto[x-placement^=top] .arrow::after,.popover.bs-popover-auto[x-placement^=top] .arrow::before,.popover.bs-popover-top .arrow::after,.popover.bs-popover-top .arrow::before{border-bottom-width:0}.popover.bs-popover-auto[x-placement^=top] .arrow::before,.popover.bs-popover-top .arrow::before{bottom:-11px;margin-left:-6px;border-top-color:rgba(0,0,0,.25)}.popover.bs-popover-auto[x-placement^=top] .arrow::after,.popover.bs-popover-top .arrow::after{bottom:-10px;margin-left:-6px;border-top-color:#fff}.popover.bs-popover-auto[x-placement^=right],.popover.bs-popover-right{margin-left:10px}.popover.bs-popover-auto[x-placement^=right] .arrow,.popover.bs-popover-right .arrow{left:0}.popover.bs-popover-auto[x-placement^=right] .arrow::after,.popover.bs-popover-auto[x-placement^=right] .arrow::before,.popover.bs-popover-right .arrow::after,.popover.bs-popover-right .arrow::before{margin-top:-8px;border-left-width:0}.popover.bs-popover-auto[x-placement^=right] .arrow::before,.popover.bs-popover-right .arrow::before{left:-11px;border-right-color:rgba(0,0,0,.25)}.popover.bs-popover-auto[x-placement^=right] .arrow::after,.popover.bs-popover-right .arrow::after{left:-10px;border-right-color:#fff}.popover.bs-popover-auto[x-placement^=bottom],.popover.bs-popover-bottom{margin-top:10px}.popover.bs-popover-auto[x-placement^=bottom] .arrow,.popover.bs-popover-bottom .arrow{top:0}.popover.bs-popover-auto[x-placement^=bottom] .arrow::after,.popover.bs-popover-auto[x-placement^=bottom] .arrow::before,.popover.bs-popover-bottom .arrow::after,.popover.bs-popover-bottom .arrow::before{margin-left:-7px;border-top-width:0}.popover.bs-popover-auto[x-placement^=bottom] .arrow::before,.popover.bs-popover-bottom .arrow::before{top:-11px;border-bottom-color:rgba(0,0,0,.25)}.popover.bs-popover-auto[x-placement^=bottom] .arrow::after,.popover.bs-popover-bottom .arrow::after{top:-10px;border-bottom-color:#fff}.popover.bs-popover-auto[x-placement^=bottom] .popover-header::before,.popover.bs-popover-bottom .popover-header::before{position:absolute;top:0;left:50%;display:block;width:20px;margin-left:-10px;content:"";border-bottom:1px solid #f7f7f7}.popover.bs-popover-auto[x-placement^=left],.popover.bs-popover-left{margin-right:10px}.popover.bs-popover-auto[x-placement^=left] .arrow,.popover.bs-popover-left .arrow{right:0}.popover.bs-popover-auto[x-placement^=left] .arrow::after,.popover.bs-popover-auto[x-placement^=left] .arrow::before,.popover.bs-popover-left .arrow::after,.popover.bs-popover-left .arrow::before{margin-top:-8px;border-right-width:0}.popover.bs-popover-auto[x-placement^=left] .arrow::before,.popover.bs-popover-left .arrow::before{right:-11px;border-left-color:rgba(0,0,0,.25)}.popover.bs-popover-auto[x-placement^=left] .arrow::after,.popover.bs-popover-left .arrow::after{right:-10px;border-left-color:#fff}.popover-header{padding:8px 14px;margin-bottom:0;font-size:16px;color:inherit;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.popover-header:empty{display:none}.popover-body{padding:9px 14px;color:#212529}.carousel{position:relative}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-item{position:relative;display:none;-webkit-box-align:center;-ms-flex-align:center;align-items:center;width:100%;-webkit-transition:-webkit-transform .6s;transition:transform .6s;transition:transform .6s,-webkit-transform .6s;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}.carousel-item-next,.carousel-item-prev,.carousel-item.active{display:block}.carousel-item-next,.carousel-item-prev{position:absolute;top:0}.carousel-item-next.carousel-item-left,.carousel-item-prev.carousel-item-right{-webkit-transform:translateX(0);transform:translateX(0)}@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)){.carousel-item-next.carousel-item-left,.carousel-item-prev.carousel-item-right{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.active.carousel-item-right,.carousel-item-next{-webkit-transform:translateX(100%);transform:translateX(100%)}@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)){.active.carousel-item-right,.carousel-item-next{-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}.active.carousel-item-left,.carousel-item-prev{-webkit-transform:translateX(-100%);transform:translateX(-100%)}@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)){.active.carousel-item-left,.carousel-item-prev{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}}.carousel-control-next,.carousel-control-prev{position:absolute;top:0;bottom:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;width:15%;color:#fff;text-align:center;opacity:.5}.carousel-control-next:focus,.carousel-control-next:hover,.carousel-control-prev:focus,.carousel-control-prev:hover{color:#fff;text-decoration:none;outline:0;opacity:.9}.carousel-control-prev{left:0}.carousel-control-next{right:0}.carousel-control-next-icon,.carousel-control-prev-icon{display:inline-block;width:20px;height:20px;background:center center/100% 100% no-repeat}.carousel-control-prev-icon{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M4 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")}.carousel-control-next-icon{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M1.5 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")}.carousel-indicators{position:absolute;right:0;bottom:10px;left:0;z-index:15;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding-left:0;margin-right:15%;margin-left:15%;list-style:none}.carousel-indicators li{position:relative;-webkit-box-flex:0;-ms-flex:0 1 auto;flex:0 1 auto;width:30px;height:3px;margin-right:3px;margin-left:3px;text-indent:-999px;background-color:rgba(255,255,255,.5)}.carousel-indicators li::before{position:absolute;top:-10px;left:0;display:inline-block;width:100%;height:10px;content:""}.carousel-indicators li::after{position:absolute;bottom:-10px;left:0;display:inline-block;width:100%;height:10px;content:""}.carousel-indicators .active{background-color:#fff}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center}@font-face{font-family:icons;src:url(icons.b72ce51cb688d32e24ba.eot);src:url(icons.b72ce51cb688d32e24ba.eot?#iefix) format("embedded-opentype"),url(../fonts&icons/icons.woff) format("woff"),url(../fonts&icons/icons.ttf) format("truetype");font-weight:400;font-style:normal}.icon{font-family:icons;display:inline-block;vertical-align:middle;line-height:1;font-weight:400;font-style:normal;speak:none;text-decoration:inherit;text-transform:none;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.bcp-alert-f::before{content:"\f101"}.bcp-alert-o::before{content:"\f102"}.bcp-angle-down-f::before{content:"\f103"}.bcp-angle-left-f::before{content:"\f104"}.bcp-angle-right-f::before{content:"\f105"}.bcp-angle-up-f::before{content:"\f106"}.bcp-approved-tar-f::before{content:"\f107"}.bcp-approved-tar-o::before{content:"\f108"}.bcp-arrow-down-f::before{content:"\f109"}.bcp-arrow-left-f::before{content:"\f10a"}.bcp-arrow-right-f::before{content:url('data:@file/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAFNJREFUOE9j/F/BQBJggtJEAypqaP8PZaACvDZg04NbQyUjiMTQg9cGbHoY///H7lZ0ANFMRigRijiIe2DGAwERoYSkGghwa8CmGgiGVFrCChgYAEN2FQWpClwUAAAAAElFTkSuQmCC')}.bcp-arrow-up-f::before{content:"\f10c"}.bcp-atm-f::before{content:"\f10d"}.bcp-atm-o::before{content:"\f10e"}.bcp-bag-f::before{content:"\f10f"}.bcp-bag-o::before{content:"\f110"}.bcp-bell-f::before{content:"\f111"}.bcp-bell-o::before{content:"\f112"}.bcp-calendar-f::before{content:"\f113"}.bcp-calendar-o::before{content:"\f114"}.bcp-car-f::before{content:"\f115"}.bcp-car-o::before{content:"\f116"}.bcp-tar-tank-f::before{content:"\f117"}.bcp-tar-tank-o::before{content:"\f118"}.bcp-charge-f::before{content:"\f119"}.bcp-charge-o::before{content:"\f11a"}.bcp-chart-f::before{content:"\f11b"}.bcp-chart-o::before{content:"\f11c"}.bcp-check-f::before,.form-group .form-control.is-valid~.form-control__icon::after{content:url('data:@file/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAQCAIAAAB/UwMIAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAG9JREFUOE/NkmEKgCAMRjcvlYfqNnWnvNX6wLFi5Ff9CHoI07HHhqrLNslLikfKXBuWH5445+rOjRPC2mrfAOZcCkDNDCFlwUgA3icNTQRQIht1XAD+PqkPGAnAZ0sVRADHvUUdF8BnfyfxU0dFRHY1mSpiwR50VAAAAABJRU5ErkJggg==')}.bcp-chronometer-f::before{content:"\f11e"}.bcp-chronometer-o::before{content:"\f11f"}.bcp-clip-f::before{content:"\f120"}.bcp-desktop-f::before{content:"\f121"}.bcp-desktop-o::before{content:"\f122"}.bcp-diamond-f::before{content:"\f123"}.bcp-diamond-o::before{content:"\f124"}.bcp-discount-f::before{content:"\f125"}.bcp-discount-o::before{content:"\f126"}.bcp-document-f::before{content:"\f127"}.bcp-document-o::before{content:"\f128"}.bcp-documentation-f::before{content:"\f129"}.bcp-documentation-o::before{content:"\f12a"}.bcp-download-f::before{content:"\f12b"}.bcp-envelope-f::before{content:"\f12c"}.bcp-envelope-o::before{content:"\f12d"}.bcp-eye-close-f::before{content:"\f12e"}.bcp-eye-close-o::before{content:"\f12f"}.bcp-eye-f::before{content:"\f130"}.bcp-eye-o::before{content:"\f131"}.bcp-face-happy-f::before{content:"\f132"}.bcp-face-happy-o::before{content:"\f133"}.bcp-face-sad-f::before{content:"\f134"}.bcp-face-sad-o::before{content:"\f135"}.bcp-face-satisfied-f::before{content:"\f136"}.bcp-face-satisfied-o::before{content:"\f137"}.bcp-face-serious-f::before{content:"\f138"}.bcp-face-serious-o::before{content:"\f139"}.bcp-face-unhappy-f::before{content:"\f13a"}.bcp-face-unhappy-o::before{content:"\f13b"}.bcp-fountain-pen-o::before{content:"\f13c"}.bcp-filter-f::before{content:"\f13d"}.bcp-filter-o::before{content:"\f13e"}.bcp-folder-f::before{content:"\f13f"}.bcp-folder-o::before{content:"\f140"}.bcp-genre-f::before{content:"\f141"}.bcp-genre-o::before{content:"\f142"}.bcp-group-man-f::before{content:"\f143"}.bcp-group-man-o::before{content:"\f144"}.bcp-group-woman-f::before{content:"\f145"}.bcp-group-woman-o::before{content:"\f146"}.bcp-headphone-f::before{content:"\f147"}.bcp-headphone-o::before{content:"\f148"}.bcp-heart-broken-f::before{content:"\f149"}.bcp-heart-broken-o::before{content:"\f14a"}.bcp-heart-f::before{content:"\f14b"}.bcp-heart-o::before{content:"\f14c"}.bcp-help-f::before{content:"\f14d"}.bcp-help-o::before{content:"\f14e"}.bcp-hourglass-f::before{content:"\f14f"}.bcp-hourglass-o::before{content:"\f150"}.bcp-house-f::before{content:"\f151"}.bcp-house-o::before{content:"\f152"}.bcp-info-f::before{content:url('data:@file/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAIAAAC0D9CtAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAGJJREFUOE9j/P//PwMSUFLTgrJg4N6ta1AWDCD0YKpGBsg6mSAUfg1AgKwApAerezCdBFcGtYckwKioqgllEgeA9pNjz7DTgxkPeABEMbluI9IquDKoPQS1ISugLC8QCxgYAA+SLkcQsbL5AAAAAElFTkSuQmCC')}.bcp-info-o::before{content:"\f154"}.bcp-laptop-f::before{content:"\f155"}.bcp-laptop-o::before{content:"\f156"}.bcp-list-f::before{content:"\f157"}.bcp-lock-f::before{content:"\f158"}.bcp-lock-o::before{content:url('data:@file/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAATCAIAAAAvYqvDAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAHlJREFUOE9j/P//PwNxAF2pkpoWlMXAcO/WNSgLDJigNBIAqkBTBAEoSpGNBAI0LhZTcQESlEK9hWYXGoA6HagUCBRVNSEMTACXAjkAv5FAAFFAmbeAZmC1hzaBhV0p4YiFAKzqgACkFJccHEAUkBBbJCRtokOAgQEAUYVOy8hHPXgAAAAASUVORK5CYII=')}.bcp-lockpen-f::before{content:"\f15a"}.bcp-lockpen-o::before{content:"\f15b"}.bcp-map-marker-f::before{content:"\f15c"}.bcp-map-marker-o::before{content:"\f15d"}.bcp-menu-f::before{content:"\f15e"}.bcp-message-f::before{content:"\f15f"}.bcp-message-o::before{content:"\f160"}.bcp-metric-down-f::before{content:"\f161"}.bcp-metric-up-f::before{content:"\f162"}.bcp-minus-f::before{content:"\f163"}.bcp-mobile-f::before{content:"\f164"}.bcp-mobile-o::before{content:"\f165"}.bcp-money-bag-f::before{content:"\f166"}.bcp-money-bag-o::before{content:"\f167"}.bcp-money-bill-f::before{content:"\f168"}.bcp-money-bill-o::before{content:"\f169"}.bcp-money-coins-f::before{content:"\f16a"}.bcp-money-coins-o::before{content:"\f16b"}.bcp-money-down-f::before{content:"\f16c"}.bcp-money-down-o::before{content:"\f16d"}.bcp-money-plus-f::before{content:"\f16e"}.bcp-money-plus-o::before{content:"\f16f"}.bcp-money-up-f::before{content:"\f170"}.bcp-money-up-o::before{content:"\f171"}.bcp-moves-f::before{content:"\f172"}.bcp-pen-active-f::before{content:"\f173"}.bcp-pen-active-o::before{content:"\f174"}.bcp-pen-f::before{content:"\f175"}.bcp-pen-o::before{content:"\f176"}.bcp-penalty-f::before{content:"\f177"}.bcp-people-man-f::before{content:"\f178"}.bcp-people-man-o::before{content:"\f179"}.bcp-people-woman-f::before{content:"\f17a"}.bcp-people-woman-o::before{content:"\f17b"}.bcp-percentage-down-o::before{content:"\f17c"}.bcp-percentage-up-o::before{content:"\f17d"}.bcp-phone-call-f::before{content:"\f17e"}.bcp-phone-call-o::before{content:"\f17f"}.bcp-play-f::before{content:"\f180"}.bcp-play-o::before{content:"\f181"}.bcp-plus-f::before{content:"\f182"}.bcp-pos-f::before{content:"\f183"}.bcp-pos-o::before{content:"\f184"}.bcp-print-f::before{content:"\f185"}.bcp-print-o::before{content:"\f186"}.bcp-qr-o::before{content:"\f187"}.bcp-screw-f::before{content:"\f188"}.bcp-screw-o::before{content:"\f189"}.bcp-search-f::before{content:"\f18a"}.bcp-search-o::before{content:"\f18b"}.bcp-select-all-f::before{content:"\f18c"}.bcp-select-all-o::before{content:"\f18d"}.bcp-send-paymen-f::before{content:"\f18e"}.bcp-send-paymen-o::before{content:"\f18f"}.bcp-send-penalty-o::before{content:"\f190"}.bcp-share-f::before{content:"\f191"}.bcp-share-o::before{content:"\f192"}.bcp-shield-f::before{content:"\f193"}.bcp-shield-o::before{content:"\f194"}.bcp-sign-in-f::before{content:"\f195"}.bcp-signut-f::before{content:"\f196"}.bcp-star-f::before{content:"\f197"}.bcp-star-o::before{content:"\f198"}.bcp-tables-f::before{content:"\f199"}.bcp-tables-o::before{content:"\f19a"}.bcp-tablet-f::before{content:"\f19b"}.bcp-tablet-o::before{content:"\f19c"}.bcp-tag-f::before{content:"\f19d"}.bcp-tag-o::before{content:"\f19e"}.bcp-ticket-f::before{content:"\f19f"}.bcp-ticket-o::before{content:"\f1a0"}.bcp-token-f::before{content:"\f1a1"}.bcp-token-o::before{content:"\f1a2"}.bcp-trash-f::before{content:"\f1a3"}.bcp-trash-o::before{content:"\f1a4"}.bcp-turn-o::before{content:"\f1a5"}.bcp-umbrella-f::before{content:"\f1a6"}.bcp-umbrella-o::before{content:"\f1a7"}.bcp-unselect-o::before{content:"\f1a8"}.bcp-wallet-f::before{content:"\f1a9"}.bcp-wallet-o::before{content:"\f1aa"}.bcp-x-f::before,.form-group .form-control.is-invalid~.form-control__icon::after{content:"\f1ab"}@font-face{font-family:Flexo;font-weight:700;font-style:italic;src:url(242863_0_0.f33683d7194867d2cdfd.eot);src:url(242863_0_0.f33683d7194867d2cdfd.eot?#iefix) format("embedded-opentype"),url(242863_0_0.989dbb6f7215039073e9.woff) format("woff"),url(242863_0_0.58c4925e7ce9fa333d5d.ttf) format("truetype")}@font-face{font-family:Flexo-ThinIt;src:url(242863_1_0.64c2d1d45cd6287c79e5.eot);src:url(242863_1_0.64c2d1d45cd6287c79e5.eot?#iefix) format("embedded-opentype"),url(242863_1_0.11a0a3fd43744d862688.woff) format("woff"),url(242863_1_0.912e460d0ca6d7284bae.ttf) format("truetype")}@font-face{font-family:Flexo-Thin;src:url(242863_2_0.74928e5539f4e414bb22.eot);src:url(242863_2_0.74928e5539f4e414bb22.eot?#iefix) format("embedded-opentype"),url(242863_2_0.e210b3fd0a554f267782.woff) format("woff"),url(242863_2_0.fb8e6c3bef3e9c5fe062.ttf) format("truetype")}@font-face{font-family:Flexo;src:url(242863_3_0.ee3c3a3ff086483833b0.eot);src:url(242863_3_0.ee3c3a3ff086483833b0.eot?#iefix) format("embedded-opentype"),url(../fonts&icons/242863_3_0.973408b83b66574e2bde.woff) format("woff"),url(242863_3_0.f64f2424e933e2459244.ttf) format("truetype")}@font-face{font-family:Flexo-MediumIt;src:url(242863_4_0.f0d2bb7af632d08673aa.eot);src:url(242863_4_0.f0d2bb7af632d08673aa.eot?#iefix) format("embedded-opentype"),url(242863_4_0.200619f8b2b81f255423.woff) format("woff"),url(242863_4_0.dc8e96f9dd33d66e1dd0.ttf) format("truetype")}@font-face{font-family:Flexo-Medium;src:url(242863_5_0.f81403bd7a0462831c0e.eot);src:url(242863_5_0.f81403bd7a0462831c0e.eot?#iefix) format("embedded-opentype"),url(242863_5_0.610de231fd56740eb0b8.woff) format("woff"),url(242863_5_0.bf83a1b98124d7466cc1.ttf) format("truetype")}@font-face{font-family:Flexo-Light;src:url(242863_6_0.fd057bca36bb1914ce80.eot);src:url(242863_6_0.fd057bca36bb1914ce80.eot?#iefix) format("embedded-opentype"),url(242863_6_0.cf16ce835a3cd9df5dc1.woff) format("woff"),url(242863_6_0.8596bce170e7ce24854d.ttf) format("truetype")}@font-face{font-family:Flexo-Heavy;src:url(242863_7_0.c530ef4d0049e53af099.eot);src:url(242863_7_0.c530ef4d0049e53af099.eot?#iefix) format("embedded-opentype"),url(242863_7_0.f139edd5f220d25342eb.woff) format("woff"),url(242863_7_0.832e2a1f66251e7204c1.ttf) format("truetype")}@font-face{font-family:Flexo-HeavyIt;src:url(242863_8_0.8e5470b382b810ca9c14.eot);src:url(242863_8_0.8e5470b382b810ca9c14.eot?#iefix) format("embedded-opentype"),url(242863_8_0.7933a0046eb570807332.woff) format("woff"),url(242863_8_0.cbbd2a4b41bed1a180b9.ttf) format("truetype")}@font-face{font-family:Flexo-LightIt;src:url(242863_9_0.58922e938a8c4c120b94.eot);src:url(242863_9_0.58922e938a8c4c120b94.eot?#iefix) format("embedded-opentype"),url(242863_9_0.d454a9666bede4df31e1.woff) format("woff"),url(242863_9_0.d4896fe83364e0b34285.ttf) format("truetype")}@font-face{font-family:Flexo;font-style:italic;src:url(242863_A_0.9652489912f85a89467a.eot);src:url(242863_A_0.9652489912f85a89467a.eot?#iefix) format("embedded-opentype"),url(242863_A_0.3cc8ee720716e80449de.woff) format("woff"),url(242863_A_0.bc2ca4e58c4135503c77.ttf) format("truetype")}@font-face{font-family:Flexo-DemiIt;src:url(242863_B_0.784dda7ff370400517aa.eot);src:url(242863_B_0.784dda7ff370400517aa.eot?#iefix) format("embedded-opentype"),url(242863_B_0.4c4cdf375f33524da76e.woff) format("woff"),url(242863_B_0.e8fe879adbaab8606928.ttf) format("truetype")}@font-face{font-family:Flexo-Demi;src:url(242863_C_0.0c2fc7ef6532f31364ac.eot);src:url(242863_C_0.0c2fc7ef6532f31364ac.eot?#iefix) format("embedded-opentype"),url(242863_C_0.81cffe01c2873bbb9b81.woff) format("woff"),url(242863_C_0.428f902a930dcd869c05.ttf) format("truetype")}@font-face{font-family:Flexo-BlackIt;src:url(242863_D_0.48ea3d6a2c0d6a80bdee.eot);src:url(242863_D_0.48ea3d6a2c0d6a80bdee.eot?#iefix) format("embedded-opentype"),url(242863_D_0.3585c1c8770c20f5161e.woff) format("woff"),url(242863_D_0.abe0869394761dc02f8c.ttf) format("truetype")}@font-face{font-family:Flexo;font-weight:700;src:url(242863_E_0.663bda40ae96c8d60e35.eot);src:url(242863_E_0.663bda40ae96c8d60e35.eot?#iefix) format("embedded-opentype"),url(../fonts&icons/242863_E_0.31e6d7cf733065d39be1.woff) format("woff"),url(242863_E_0.5714eb0ed793962cd1b8.ttf) format("truetype")}@font-face{font-family:Flexo-Black;src:url(242863_F_0.e803badb6c50e286819a.eot);src:url(242863_F_0.e803badb6c50e286819a.eot?#iefix) format("embedded-opentype"),url(242863_F_0.11c54384891bea74c669.woff) format("woff"),url(242863_F_0.a58283e5613c65a0d22e.ttf) format("truetype")}.display-large{font-size:36px;line-height:48px}.display-medium{font-size:28px;line-height:36px}.display-small{font-size:26px;line-height:32px}.h1,h1{font-size:24px;line-height:36px}.h2,h2{font-size:18px;line-height:28px}.h3,h3{font-size:16px;line-height:24px}.body-text{font-size:13px;line-height:20px}.small-text{font-size:11px;line-height:16px}.big-uppercase,.medium-uppercase,.small-uppercase{text-transform:uppercase}.big-uppercase{font-size:16px;line-height:24px}.medium-uppercase{font-size:13px;line-height:20px}.small-uppercase{font-size:11px;line-height:16px}@media (max-width:767px){.h1,h1{font-size:18px;line-height:28px}.h2,h2{font-size:16px;line-height:24px}.body-text{font-size:14px;line-height:20px}.small-text{font-size:12px;line-height:16px}.big-uppercase{font-size:16px;line-height:24px}.medium-uppercase{font-size:14px;line-height:20px}.small-uppercase{font-size:12px;line-height:16px}}.text-note{font-size:10px;color:#999}.font-size-minus-2{font-size:.75rem}.font-size-minus-1{font-size:.875rem}.font-size-0{font-size:1rem}.font-size-1{font-size:1.125rem}.font-size-2{font-size:1.25rem}.font-size-3{font-size:1.5rem}.font-size-4{font-size:1.75rem}.font-size-5{font-size:2rem}.font-size-6{font-size:2.25rem}.font-size-7{font-size:2.625rem}.font-size-8{font-size:3rem}.font-size-9{font-size:3.375rem}.font-size-10{font-size:3.75rem}.ds-custom-table .wrapper-padding{padding:15px 0}.ds-custom-table .inner-padding{padding:0 12px}.ds-custom-table .title-xl{font-size:2.25rem}.ds-custom-table .bold{font-weight:700}.ds-custom-table .italic{font-style:italic}::-webkit-scrollbar{width:8px}::-webkit-scrollbar-track{border-radius:4px;background:#e8e8e8}::-webkit-scrollbar-thumb{border-radius:4px;background:#a8a8a8}::-webkit-scrollbar-thumb:vertical{height:100px}.btn{height:32px;cursor:pointer;padding:1px 16px 0;font-size:13px;line-height:30px;border-radius:16px;font-weight:700}.btn.focus,.btn:focus{-webkit-box-shadow:none;box-shadow:none}.btn-primary{color:#fff;background-color:#ff7800;border-color:#ff7800}.btn-primary:hover{color:#fff;background-color:#ff9333;border-color:#ff9333}.btn-primary.disabled,.btn-primary.disabled:active,.btn-primary:disabled,.btn-primary:disabled:active{background-color:#c8c8c8;border-color:#c8c8c8}.btn-primary.active,.btn-primary:active,.show>.btn-primary.dropdown-toggle{background-color:#d76c0e;background-image:none;border-color:#d76c0e}.btn-secondary{color:#fff;background-color:#2cc0d5;border-color:#2cc0d5}.btn-secondary:hover{color:#fff;background-color:#56ccdd;border-color:#56ccdd}.btn-secondary.disabled,.btn-secondary.disabled:active,.btn-secondary:disabled,.btn-secondary:disabled:active{background-color:#c8c8c8;border-color:#c8c8c8}.btn-secondary.active,.btn-secondary:active,.show>.btn-secondary.dropdown-toggle{background-color:#2ea5b8;background-image:none;border-color:#2ea5b8}.btn-success{color:#fff;background-color:#28a745;border-color:#28a745}.btn-success:hover{color:#fff;background-color:#218838;border-color:#218838}.btn-success.disabled,.btn-success.disabled:active,.btn-success:disabled,.btn-success:disabled:active{background-color:#c8c8c8;border-color:#c8c8c8}.btn-success.active,.btn-success:active,.show>.btn-success.dropdown-toggle{background-color:#1e7e34;background-image:none;border-color:#1e7e34}.btn-info{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-info:hover{color:#fff;background-color:#138496;border-color:#138496}.btn-info.disabled,.btn-info.disabled:active,.btn-info:disabled,.btn-info:disabled:active{background-color:#c8c8c8;border-color:#c8c8c8}.btn-info.active,.btn-info:active,.show>.btn-info.dropdown-toggle{background-color:#117a8b;background-image:none;border-color:#117a8b}.btn-warning{color:#111;background-color:#ffc107;border-color:#ffc107}.btn-warning:hover{color:#111;background-color:#e0a800;border-color:#e0a800}.btn-warning.disabled,.btn-warning.disabled:active,.btn-warning:disabled,.btn-warning:disabled:active{background-color:#c8c8c8;border-color:#c8c8c8}.btn-warning.active,.btn-warning:active,.show>.btn-warning.dropdown-toggle{background-color:#d39e00;background-image:none;border-color:#d39e00}.btn-danger{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-danger:hover{color:#fff;background-color:#c82333;border-color:#c82333}.btn-danger.disabled,.btn-danger.disabled:active,.btn-danger:disabled,.btn-danger:disabled:active{background-color:#c8c8c8;border-color:#c8c8c8}.btn-danger.active,.btn-danger:active,.show>.btn-danger.dropdown-toggle{background-color:#bd2130;background-image:none;border-color:#bd2130}.btn-light{color:#111;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light:hover{color:#111;background-color:#e2e6ea;border-color:#e2e6ea}.btn-light.disabled,.btn-light.disabled:active,.btn-light:disabled,.btn-light:disabled:active{background-color:#c8c8c8;border-color:#c8c8c8}.btn-light.active,.btn-light:active,.show>.btn-light.dropdown-toggle{background-color:#dae0e5;background-image:none;border-color:#dae0e5}.btn-dark{color:#fff;background-color:#343a40;border-color:#343a40}.btn-dark:hover{color:#fff;background-color:#23272b;border-color:#23272b}.btn-dark.disabled,.btn-dark.disabled:active,.btn-dark:disabled,.btn-dark:disabled:active{background-color:#c8c8c8;border-color:#c8c8c8}.btn-dark.active,.btn-dark:active,.show>.btn-dark.dropdown-toggle{background-color:#1d2124;background-image:none;border-color:#1d2124}.btn-outline-primary{color:#ff7800;background-color:transparent;background-image:none;border-color:#ff7800}.btn-outline-primary:hover{color:#fff;background-color:#ff9333;border-color:#ff9333}.btn-outline-primary.disabled,.btn-outline-primary:disabled{color:#c8c8c8;background-color:transparent}.btn-outline-primary.active,.btn-outline-primary:active,.show>.btn-outline-primary.dropdown-toggle{color:#fff;background-color:#d76c0e;border-color:#d76c0e}.btn-outline-secondary{color:#2cc0d5;background-color:transparent;background-image:none;border-color:#2cc0d5}.btn-outline-secondary:hover{color:#fff;background-color:#56ccdd;border-color:#56ccdd}.btn-outline-secondary.disabled,.btn-outline-secondary:disabled{color:#c8c8c8;background-color:transparent}.btn-outline-secondary.active,.btn-outline-secondary:active,.show>.btn-outline-secondary.dropdown-toggle{color:#fff;background-color:#2ea5b8;border-color:#2ea5b8}.btn-outline-success{color:#28a745;background-color:transparent;background-image:none;border-color:#28a745}.btn-outline-success:hover{color:#fff;background-color:#218838;border-color:#218838}.btn-outline-success.disabled,.btn-outline-success:disabled{color:#c8c8c8;background-color:transparent}.btn-outline-success.active,.btn-outline-success:active,.show>.btn-outline-success.dropdown-toggle{color:#fff;background-color:#1e7e34;border-color:#1e7e34}.btn-outline-info{color:#17a2b8;background-color:transparent;background-image:none;border-color:#17a2b8}.btn-outline-info:hover{color:#fff;background-color:#138496;border-color:#138496}.btn-outline-info.disabled,.btn-outline-info:disabled{color:#c8c8c8;background-color:transparent}.btn-outline-info.active,.btn-outline-info:active,.show>.btn-outline-info.dropdown-toggle{color:#fff;background-color:#117a8b;border-color:#117a8b}.btn-outline-warning{color:#ffc107;background-color:transparent;background-image:none;border-color:#ffc107}.btn-outline-warning:hover{color:#fff;background-color:#e0a800;border-color:#e0a800}.btn-outline-warning.disabled,.btn-outline-warning:disabled{color:#c8c8c8;background-color:transparent}.btn-outline-warning.active,.btn-outline-warning:active,.show>.btn-outline-warning.dropdown-toggle{color:#fff;background-color:#d39e00;border-color:#d39e00}.btn-outline-danger{color:#dc3545;background-color:transparent;background-image:none;border-color:#dc3545}.btn-outline-danger:hover{color:#fff;background-color:#c82333;border-color:#c82333}.btn-outline-danger.disabled,.btn-outline-danger:disabled{color:#c8c8c8;background-color:transparent}.btn-outline-danger.active,.btn-outline-danger:active,.show>.btn-outline-danger.dropdown-toggle{color:#fff;background-color:#bd2130;border-color:#bd2130}.btn-outline-light{color:#f8f9fa;background-color:transparent;background-image:none;border-color:#f8f9fa}.btn-outline-light:hover{color:#212529;background-color:#e2e6ea;border-color:#e2e6ea}.btn-outline-light.disabled,.btn-outline-light:disabled{color:#c8c8c8;background-color:transparent}.btn-outline-light.active,.btn-outline-light:active,.show>.btn-outline-light.dropdown-toggle{color:#212529;background-color:#dae0e5;border-color:#dae0e5}.btn-outline-dark{color:#343a40;background-color:transparent;background-image:none;border-color:#343a40}.btn-outline-dark:hover{color:#fff;background-color:#23272b;border-color:#23272b}.btn-outline-dark.disabled,.btn-outline-dark:disabled{color:#c8c8c8;background-color:transparent}.btn-outline-dark.active,.btn-outline-dark:active,.show>.btn-outline-dark.dropdown-toggle{color:#fff;background-color:#1d2124;border-color:#1d2124}.btn-group-lg>.btn,.btn-lg{height:40px;padding:0 16px;font-size:18px;line-height:38px;border-radius:20px}.btn-group-sm>.btn,.btn-sm{height:24px;padding:0 16px;font-size:11px;line-height:22px;border-radius:12px}.btn>i+span,.btn>span+i{margin-left:8px}.btn.btn-icon{width:32px;padding:0}.btn.btn-icon i{margin:0!important;line-height:unset;vertical-align:initial}.btn-group-lg>.btn.btn-icon,.btn.btn-icon.btn-lg{width:40px}.btn-group-sm>.btn.btn-icon,.btn.btn-icon.btn-sm{width:24px}.btn-outline-primary:disabled,.btn-outline-secondary:disabled{border-color:#c8c8c8}.btn-dark-background{color:#fff;border-color:#fff}.btn-outline-primary.btn-dark-background:hover{background-color:#ff7800;border-color:#ff7800}.custom-control{height:24px;min-height:24px;padding-left:40px}.custom-control .custom-control-description{line-height:24px}.custom-control-input:checked~.custom-control-indicator{background-color:#2cc0d5;-webkit-box-shadow:none;box-shadow:none}.custom-control-input:focus~.custom-control-indicator{-webkit-box-shadow:none;box-shadow:none}.custom-control-input:active~.custom-control-indicator{background-color:#2cc0d5;-webkit-box-shadow:none;box-shadow:none}.custom-control-input:disabled~.custom-control-indicator{background-color:#e8e8e8;border-color:#a8a8a8}.custom-control-input:disabled~.custom-control-description{color:#888}.custom-control-indicator{background-color:#fff;border:2px solid #2cc0d5;-webkit-box-shadow:none;box-shadow:none;height:24px;min-height:24px;min-width:24px;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);width:24px}.custom-checkbox .custom-control-input:checked~.custom-control-indicator{background-image:none}.custom-checkbox .custom-control-input:checked~.custom-control-indicator::before{content:url('data:@file/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAQCAIAAAB/UwMIAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAG9JREFUOE/NkmEKgCAMRjcvlYfqNnWnvNX6wLFi5Ff9CHoI07HHhqrLNslLikfKXBuWH5445+rOjRPC2mrfAOZcCkDNDCFlwUgA3icNTQRQIht1XAD+PqkPGAnAZ0sVRADHvUUdF8BnfyfxU0dFRHY1mSpiwR50VAAAAABJRU5ErkJggg==');font-family:icons;left:50%;margin-top:2px;position:absolute;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.custom-checkbox .custom-control-input:indeterminate~.custom-control-indicator{background-color:#fff;background-image:none;-webkit-box-shadow:none;box-shadow:none}.custom-radio .custom-control-input:checked~.custom-control-indicator{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-8 -8 16 16'%3E%3Ccircle r='8' fill='%23fff'/%3E%3C/svg%3E")}.custom-range{position:relative;display:inline-block;width:100%;min-width:100%;height:48px;min-height:48px;margin-bottom:0}.custom-range .custom-range-input{position:absolute;opacity:0;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);width:100%;z-index:2}.custom-range .custom-range-input:active~.custom-range-thumb{-webkit-box-shadow:0 0 0 16px rgba(44,192,213,.5);box-shadow:0 0 0 16px rgba(44,192,213,.5)}.custom-range .custom-range-input:disabled~.custom-range-thumb{background-color:#e5e4e5;-webkit-box-shadow:none;box-shadow:none}.custom-range .custom-range-input:disabled~.custom-range-track{background-color:#e5e4e5}.custom-range .custom-range-track,.custom-range::before{height:4px;width:100%;border-radius:2px;position:absolute;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%)}.custom-range::before{background-color:#e5e4e5;content:'';z-index:-1}.custom-range .custom-range-track{background-color:#2cc0d5;width:0%;z-index:1}.custom-range .custom-range-thumb{height:16px;width:16px;background-color:#2cc0d5;border-radius:8px;cursor:pointer;position:absolute;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);z-index:3;-webkit-transition:-webkit-box-shadow .15s ease-in-out;transition:box-shadow .15s ease-in-out;transition:box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;pointer-events:none}.form-group--relative{position:relative;display:inline-block;margin-top:16px}.form-group--stacked{width:100%}.form-group .form-control{font-size:15px;line-height:32px;padding:0;color:#282828;outline:0;-webkit-box-shadow:none;box-shadow:none;background:0 0;border:none;border-radius:0;border-bottom:1px solid #012d74}.form-group .form-control:active,.form-group .form-control:focus{outline:0;-webkit-box-shadow:none;box-shadow:none}.form-group .form-control__icon{position:absolute;top:0;right:0;line-height:32px}.form-group .form-control__icon::after{font-family:icons}.form-group .form-control~label{margin:0;top:0;font-size:15px;line-height:32px;color:#a8a8a8;position:absolute;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-pointer-events:none;-moz-pointer-events:none;-ms-pointer-events:none;pointer-events:none;-webkit-transition:.3s;transition:.3s}.form-group .form-control:disabled{color:#e8e8e8;border-color:#e8e8e8}.form-group .form-control:disabled~label{color:#e8e8e8}.form-group .form-control.is-invalid{border-color:#da2329}.form-group .form-control.is-invalid~.form-control__icon,.form-group .form-control.is-invalid~label{color:#da2329}.form-group .form-control.is-valid{border-color:#93c737}.form-group .form-control.is-valid~.form-control__icon,.form-group .form-control.is-valid~label{color:#93c737}.form-group.active .form-control~label{color:#012d74;font-size:12px;line-height:16px;letter-spacing:.4px;font-weight:700;-webkit-transform:translateY(-16px) scale(1);transform:translateY(-16px) scale(1)}.form-group.active .form-control:disabled{color:#e8e8e8;border-color:#e8e8e8}.form-group.active .form-control:disabled~label{color:#e8e8e8}.form-group.active .form-control.is-invalid{color:#da2329;border-color:#da2329}.form-group.active .form-control.is-invalid~label{color:#da2329}.form-group.active .form-control.is-valid{color:#93c737;border-color:#93c737}.form-group.active .form-control.is-valid~label{color:#93c737}.form-group input[type=password]{letter-spacing:8px;font-size:30px}.form-group textarea{resize:none}.invalid-feedback,.valid-feedback{font-size:9px;letter-spacing:.4px;line-height:16px;margin:0;display:block}.valid-feedback{color:#93c737}.invalid-feedback{color:#da2329}.form-group .form-control::-webkit-input-placeholder{color:transparent}.form-group .form-control:-moz-placeholder{color:transparent}.form-group .form-control::-moz-placeholder{color:transparent}.form-group .form-control:-ms-input-placeholder{color:transparent}.custom-control.custom-switch{padding-left:0}.datepicker{width:100%;position:relative;display:table;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.datepicker [role=input]{display:table-cell;width:100%}.datepicker [role=input]::-ms-clear{display:none}.datepicker [role=right-icon]{cursor:pointer;display:table-cell}.calendar{position:absolute;z-index:4}.calendar table tr[role=month-manager] th{cursor:pointer}.calendar table tr[role=month-manager] th div[role=month]{width:100%;text-align:center;font-size:16px;font-weight:700;color:#112356}.datepicker-md [role=right-icon]{cursor:pointer;position:absolute;right:0;top:0;color:#ff7800;float:right;margin-right:10px;margin-top:5px}.calendar-md{height:365px;width:353px;-webkit-transform:translate3d(-1px,8px,0);transform:translate3d(-1px,8px,0);will-change:transform;margin:0 auto!important;border:15px solid #fff;-webkit-box-shadow:0 8px 15px 1px #d6dce9;box-shadow:0 8px 15px 1px #d6dce9;position:absolute;float:left;padding:.5rem 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border-radius:.25rem}.calendar-md .week-days{font-size:12px;text-align:center;font-weight:700;color:rgba(0,0,0,.38)}.calendar-md table{width:100%;height:100%}.calendar-md table tr[role=month-manager] th div i.icon-datepicker{color:#ff7800}.calendar-md table tr td div,.calendar-md table tr th div{display:block;width:40px;height:40px;line-height:40px;font-size:13px;text-align:center;vertical-align:middle;position:relative}.calendar-md table tr td.gj-cursor-pointer div:hover{background:#ff7800;border-radius:50%;color:#fff;cursor:pointer}.calendar-md table tr td[type=today] div{color:rgba(0,0,0,.87)}.calendar-md table tr td[type=selected] div{color:#fff;background:#ff7800;border-radius:50%}.calendar-md table tr td.disabled div,.calendar-md table tr td[type=other-month] div{color:#bdbdbd}.form-group.datepicker-with-icon span.form-group__icon{-webkit-transform:translate3d(0,-48px,0) scale(1);transform:translate3d(0,-48px,0) scale(1);width:100%}.form-group.datepicker-with-icon span.form-group__icon::after{color:#ff7800;font-family:icons;position:absolute;float:right;right:0;content:"\f109"}.form-group.datepicker-with-icon .form-control:disabled~span.form-group__icon{pointer-events:none}.form-group.datepicker-with-icon .form-control:disabled~span.form-group__icon::after{color:#a8a8a8}.dropdown,.dropup{padding:15px;margin:-15px}.dropdown .title-dropdown,.dropup .title-dropdown{font-weight:700;line-height:16px;letter-spacing:.4px;text-align:left;color:#012d74}.dropdown .dropdown-toggle,.dropup .dropdown-toggle{border:0;border-radius:0}.dropdown .dropdown-toggle::after,.dropup .dropdown-toggle::after{display:none}.dropdown .dropdown-toggle .text,.dropup .dropdown-toggle .text{line-height:32px;text-align:left;font-size:15px;color:#282828;display:inline-block;border-bottom:1px solid #012d74;width:100%}.dropdown .dropdown-toggle .text::after,.dropup .dropdown-toggle .text::after{font-family:icons;content:"\f103";color:#ff7800;float:right}.dropdown .dropdown-menu,.dropup .dropdown-menu{width:100%;min-width:0;margin-top:-15px;padding:0;border:8px solid #fff;border-radius:4px;-webkit-box-shadow:0 4px 6px 0 #c8c8c8;box-shadow:0 4px 6px 0 #c8c8c8;height:auto;max-height:200px;overflow-x:hidden}.dropdown .dropdown-menu>.dropdown-item,.dropup .dropdown-menu>.dropdown-item{width:auto;margin-right:10px;margin-bottom:8px;font-size:15px;line-height:2.13;text-align:left;color:#282828;padding-left:8px;padding-right:8px;cursor:pointer;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.dropdown .dropdown-menu>.dropdown-item:last-child,.dropup .dropdown-menu>.dropdown-item:last-child{margin-bottom:0}.dropdown .dropdown-menu>.dropdown-item.selected,.dropup .dropdown-menu>.dropdown-item.selected{font-weight:700;border-radius:24px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-pointer-events:none;-moz-pointer-events:none;-ms-pointer-events:none;pointer-events:none;cursor:none}.dropdown .dropdown-menu>.dropdown-item:hover,.dropup .dropdown-menu>.dropdown-item:hover{border-radius:24px;background-color:#f8f8f8}.dropdown .dropdown-menu>.dropdown-item.disabled,.dropup .dropdown-menu>.dropdown-item.disabled{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-pointer-events:none;-moz-pointer-events:none;-ms-pointer-events:none;pointer-events:none;cursor:none;color:#e8e8e8}.dropdown.disabled,.dropdown.disabled .title-dropdown,.dropup.disabled,.dropup.disabled .title-dropdown{color:#e8e8e8}.dropdown.disabled .dropdown-toggle,.dropup.disabled .dropdown-toggle{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-pointer-events:none;-moz-pointer-events:none;-ms-pointer-events:none;pointer-events:none}.dropdown.disabled .dropdown-toggle .text,.dropup.disabled .dropdown-toggle .text{color:#e8e8e8;border-color:#e8e8e8}.dropdown.disabled .dropdown-toggle .text::after,.dropup.disabled .dropdown-toggle .text::after{color:#e8e8e8}.dropdown.error,.dropdown.error .title-dropdown,.dropup.error,.dropup.error .title-dropdown{color:#da2329}.dropdown.error .dropdown-toggle .text,.dropup.error .dropdown-toggle .text{color:#da2329;border-color:#da2329}.dropdown.show,.dropup.show{border-radius:4px;-webkit-box-shadow:0 4px 6px 0 #c8c8c8;box-shadow:0 4px 6px 0 #c8c8c8;border-color:transparent}.dropdown.show .dropdown-toggle .text::after,.dropup.show .dropdown-toggle .text::after{content:"\f106"}.dropdown.search .form-group--relative,.dropup.search .form-group--relative{margin-bottom:0}.dropdown.search .form-group::before,.dropup.search .form-group::before{content:"\f18b";font-family:icons;color:#ff7800;position:absolute;right:0;top:5px}.dropdown.search .form-group.is-invalid::before,.dropup.search .form-group.is-invalid::before{color:#da2329}.dropdown.search.disabled .form-group::before,.dropup.search.disabled .form-group::before{color:#c8c8c8}.dropdown.search.error .form-group .form-control,.dropup.search.error .form-group .form-control{color:#da2329;border-color:#da2329}.dropdown.search.error .form-group label,.dropup.search.error .form-group label{color:#da2329}.wizard{display:-webkit-box;display:-ms-flexbox;display:flex;margin:0;padding:0;overflow:hidden;counter-reset:wizard}.wizard li{-webkit-box-flex:1;-ms-flex:1;flex:1;list-style-type:none;position:relative;text-align:center;font-size:16px;color:#282828}.wizard li span[desktop]{display:initial}.wizard li span[mobile]{display:none}.wizard li:before{counter-increment:wizard;content:url('data:@file/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAQCAIAAAB/UwMIAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAG9JREFUOE/NkmEKgCAMRjcvlYfqNnWnvNX6wLFi5Ff9CHoI07HHhqrLNslLikfKXBuWH5445+rOjRPC2mrfAOZcCkDNDCFlwUgA3icNTQRQIht1XAD+PqkPGAnAZ0sVRADHvUUdF8BnfyfxU0dFRHY1mSpiwR50VAAAAABJRU5ErkJggg==');font-family:icons;display:block;color:#fff;background-color:#93c737;border-radius:50%;position:relative;left:50%;margin-left:-20px;z-index:1;font-weight:700;-webkit-transition-property:background,border-color,color;transition-property:background,border-color,color;-webkit-transition-duration:.5s;transition-duration:.5s;-webkit-transition-timing-function:ease-in;transition-timing-function:ease-in;-webkit-box-sizing:unset;box-sizing:unset}.wizard li:after{background:-webkit-gradient(linear,left top,right top,color-stop(50%,#93c737),color-stop(50%,#d6dce9));background:linear-gradient(to right,#93c737 50%,#d6dce9 50%);background-size:200% 100%;background-position:left bottom;-webkit-transition:background .5s ease-in;transition:background .5s ease-in}.wizard li+li:after{content:"";display:block;width:100%;position:absolute;left:-50%}.wizard li.active:before,.wizard li.active~li:before{content:counter(wizard);font-family:inherit;background-color:#fff;color:#012d74;border-color:#012d74}.wizard li.active~li:after{background-color:#d6dce9;background-position:right bottom}.wizard li.active~li:before{color:#d6dce9;border-color:#d6dce9}@media (max-width:576px){.wizard li span[desktop]{display:none}.wizard li span[mobile]{display:initial}}.wizard-kiosko{display:-webkit-box;display:-ms-flexbox;display:flex;margin:0;padding:0;overflow:hidden}.wizard-kiosko li{-webkit-box-flex:1;-ms-flex:1;flex:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;list-style-type:none;position:relative;height:40px;text-align:center;text-transform:uppercase;font-size:13px;line-height:13px;color:#012d74;background-color:#eff2f9;counter-increment:kiosko}.wizard-kiosko li:first-child:after,.wizard-kiosko li:first-child:before{display:none}.wizard-kiosko li:after,.wizard-kiosko li:before{content:"";position:absolute;left:0;border:20px solid transparent;border-left-color:#eff2f9;z-index:2}.wizard-kiosko li:after{top:-2px;z-index:1;border-left-color:#dedede;border-width:22px}.wizard-kiosko li>span:before{content:counter(kiosko) ". ";font-weight:700}.wizard-kiosko li>span:after{position:absolute;font-family:icons;content:url('data:@file/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAQCAIAAAB/UwMIAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAG9JREFUOE/NkmEKgCAMRjcvlYfqNnWnvNX6wLFi5Ff9CHoI07HHhqrLNslLikfKXBuWH5445+rOjRPC2mrfAOZcCkDNDCFlwUgA3icNTQRQIht1XAD+PqkPGAnAZ0sVRADHvUUdF8BnfyfxU0dFRHY1mSpiwR50VAAAAABJRU5ErkJggg==');color:#93c737;margin-left:8px}.wizard-kiosko li.active{color:#fff;background-color:#a2b5d2}.wizard .wizard-kiosko li.active~li:before,.wizard-kiosko .wizard li.active~li:before,.wizard-kiosko li.active:after,.wizard-kiosko li.active:before{border-left-color:#eff2f9}.wizard-kiosko li.active~li{background-color:#fff;color:#a8a8a8}.wizard-kiosko li.active~li:before{border-left-color:#fff}.wizard-kiosko li.active~li>span:after{display:none}.wizard-kiosko li.active+li:after,.wizard-kiosko li.active+li:before{border-left-color:#a2b5d2}.wizard-kiosko li.active>span:after{display:none}.custom-switch{position:relative;display:inline-block;padding-left:0}.custom-switch .switch-label,.custom-switch .switch-wrapper{display:inline-block;vertical-align:middle}.custom-switch .switch-label{padding-left:10px}.custom-switch .switch-wrapper{width:56px;height:32px;padding:2px;background-color:#adb5bd;border-radius:34px}.custom-switch .switch-wrapper .switch-content{position:relative;width:100%;height:100%}.custom-switch .switch-wrapper .switch-content .content-slider{position:absolute;top:0;right:0;bottom:0;left:0;cursor:pointer;background-color:#e9ecef;border-radius:34px;-webkit-transition:.4s;transition:.4s}.custom-switch .switch-wrapper .switch-content .content-slider::before{position:absolute;bottom:3px;left:4px;width:22px;height:22px;content:"";background-color:#adb5bd;border-radius:50%;-webkit-transition:.4s;transition:.4s}.custom-switch input{position:absolute;top:0;left:0;z-index:1;width:100%;height:100%;cursor:pointer;opacity:0}.custom-switch input:checked+.switch-wrapper{background-color:#2cc0d5}.custom-switch input:checked+.switch-wrapper .content-slider{background-color:#fff}.custom-switch input:checked+.switch-wrapper .content-slider::before{background-color:#2cc0d5;-webkit-transform:translateX(22px);transform:translateX(22px)}.custom-switch input:focus+.switch-wrapper .switch-content .content-slider{-webkit-box-shadow:0 0 1px #2cc0d5;box-shadow:0 0 1px #2cc0d5}.custom-switch input:disabled+.switch-wrapper{opacity:.5}.modal{text-align:center;padding:0!important}.modal:before{content:'';display:inline-block;height:100%;vertical-align:middle;margin-right:-6px}.modal .modal-dialog{display:inline-block;text-align:left;vertical-align:middle}.modal-custom .modal-content{overflow:hidden;-webkit-box-shadow:0 3px 15px 0 rgba(0,0,0,.15);box-shadow:0 3px 15px 0 rgba(0,0,0,.15)}.modal-custom .modal-header{padding:12px 16px}.modal-custom .modal-header .close{cursor:pointer;opacity:1!important}.modal-custom .modal-header i{font-size:16px;color:#ff7800}.modal-custom .modal-body{padding:24px 36px;text-align:center}.modal-custom .modal-body .body-title{margin-bottom:20px}.modal-custom .modal-body .body-title h4{font-size:24px;font-weight:700;line-height:36px;color:#012d74}.modal-custom .modal-body .body-content{max-height:200px;overflow-y:auto;padding:0 20px}.modal-custom .modal-body .body-content p{font-size:13px;line-height:20px}.modal-custom .modal-footer{background-color:#f8f8f8}.sorter-table thead th{cursor:pointer}.table-custom{padding:0 15px;background-color:#f8f8f8}.table-custom .table-content{position:relative;width:60px;line-height:initial}.table-custom .content-center{position:absolute;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);width:100%;height:34px}.table-custom .content-center .custom-checkbox{padding-left:24px;margin:0}.table-custom .content-center .custom-checkbox span{width:24px;min-width:24px;height:24px;min-height:24px}.table-custom tbody tr td,.table-custom thead tr th{position:relative}.table-custom thead .table-content{height:56px}.table-custom thead tr th{height:56px;padding:0;font-size:11px;color:#012d74;text-transform:uppercase;vertical-align:middle;border-top:0;border-bottom:0}.table-custom thead tr .icon-down-outline,.table-custom thead tr .icon-up-outline{font-size:12px;color:#c8c8c8}.table-custom thead tr .icon-up-outline{display:none;color:#ff7800}.table-custom thead .icons{display:inline-block;width:12px;height:11px;margin-left:15px}.table-custom thead .headerSortDown .icon-down-outline{display:initial;color:#ff7800}.table-custom thead .headerSortUp .icon-up-outline{display:initial}.table-custom thead .headerSortUp .icon-down-outline{display:none}.table-custom tbody .table-content{height:88px}.table-custom tbody tr td{height:88px;padding:0;font-size:13px;color:#686868;vertical-align:middle;border-top:0;border-bottom:1px solid #e8e8e8}.table-custom tbody tr:last-child td{border-bottom:0}.bg-gray{padding:24px;background-color:#f8f8f8}.table-responsive{display:table;width:100%;padding:0 15px;background-color:#f8f8f8}.table-responsive .table-body{display:table-row-group}.table-responsive .table-row{position:relative;display:table-row;margin-bottom:15px}.table-responsive .table-row .title-oval{width:24px;height:24px;font-size:10px;font-weight:700;line-height:27px;color:#fff;text-align:center;background-color:#93c737;border-radius:50%}.table-responsive .table-row .row-edge{position:absolute;top:0;right:0;display:none}.table-responsive .table-row .row-edge .edge-triangle{position:relative;width:32px;height:32px}.table-responsive .table-row .row-edge .triangle-top{width:0;height:0;border-top:32px solid #f8f8f8;border-left:32px solid #d6dce9}.table-responsive .table-row::before{position:absolute;top:0;right:0;display:none;content:"\A";border-top:30px solid #f8f8f8;border-left:30px solid transparent}.table-responsive .table-row::after{border-right:30px solid transparent;border-bottom:30px solid #eff3f9}.table-responsive .table-row .table-cell{display:table-cell;font-size:13px;line-height:88px;color:#686868;border-bottom:1px solid #e8e8e8}.table-responsive .table-row .table-cell span{display:none}.table-responsive .table-row .table-cell p{margin:0}.table-responsive .table-row .row-footer,.table-responsive .table-row .row-title{display:none}.table-responsive .table-row .row-footer{padding:15px;text-align:right;background-color:#eff3f9}.table-responsive .table-row .row-footer button{display:inline-block;vertical-align:middle}.table-responsive .table-row .row-title{padding:15px 15px 20px;position:relative}.table-responsive .table-row .row-title .title-oval{position:absolute;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%)}.table-responsive .table-row .row-title p{padding:3px 20px 3px 0;margin:0 0 0 30px;font-size:13px;font-weight:700;color:#686868}.table-responsive .table-head,.table-responsive .table-row:last-child .table-cell{border-bottom:0}.table-responsive .table-head .table-cell{font-size:11px;font-weight:700;line-height:56px;color:#012d74;text-transform:uppercase;border-bottom:0}@media (max-width:1600px){.table-responsive{display:block;width:100%;padding:15px}.table-responsive .table-body{overflow:hidden}.table-responsive .table-head{display:none!important}.table-responsive .table-row{position:relative;display:inline-block;width:32%;padding:0;margin-right:2%;vertical-align:top;background-color:#fff}.table-responsive .table-row:nth-child(3n+1){margin-right:0}.table-responsive .table-row .row-edge{display:block}.table-responsive .table-row .table-cell{display:block;padding:5px 25px;line-height:initial;border-bottom:0}.table-responsive .table-row .table-cell span{display:initial;float:left;width:80px;font-size:11px;font-weight:700;color:#012d74;text-transform:uppercase}.table-responsive .table-row .table-cell p{margin:0 0 0 100px}.table-responsive .table-row .row-footer,.table-responsive .table-row .row-title{display:block}.table-responsive .table-row .row-footer{margin-top:20px}.table-responsive .table-row .cell-none{display:none}}@media (max-width:1300px){.table-responsive{display:block;width:100%;padding:15px}.table-responsive .table-body{overflow:hidden}.table-responsive .table-head{display:none!important}.table-responsive .table-row{position:relative;display:inline-block;padding:0;margin-right:2%;vertical-align:top;background-color:#fff;width:49%}.table-responsive .table-row .row-edge{display:block}.table-responsive .table-row .table-cell{display:block;padding:5px 25px;line-height:initial;border-bottom:0}.table-responsive .table-row .table-cell span{display:initial;float:left;width:80px;font-size:11px;font-weight:700;color:#012d74;text-transform:uppercase}.table-responsive .table-row .table-cell p{margin:0 0 0 100px}.table-responsive .table-row .row-footer,.table-responsive .table-row .row-title{display:block}.table-responsive .table-row .row-footer{margin-top:20px}.table-responsive .table-row .cell-none{display:none}.table-responsive .table-row:nth-child(3n+1){margin-right:2%}.table-responsive .table-row:nth-child(2n+1){margin-right:0}}@media (max-width:900px){.table-responsive{display:block;width:100%;padding:15px}.table-responsive .table-body{overflow:hidden}.table-responsive .table-head{display:none!important}.table-responsive .table-row{position:relative;display:inline-block;padding:0;vertical-align:top;background-color:#fff;width:100%;margin-right:0}.table-responsive .table-row .row-edge{display:block}.table-responsive .table-row .table-cell{display:block;padding:5px 25px;line-height:initial;border-bottom:0}.table-responsive .table-row .table-cell span{display:initial;float:left;width:80px;font-size:11px;font-weight:700;color:#012d74;text-transform:uppercase}.table-responsive .table-row .table-cell p{margin:0 0 0 100px}.table-responsive .table-row .row-footer,.table-responsive .table-row .row-title{display:block}.table-responsive .table-row .row-footer{margin-top:20px}.table-responsive .table-row .cell-none{display:none}.table-responsive .table-row:nth-child(3n+1){margin-right:2%}.table-responsive .table-row:nth-child(2n+1){margin-right:0}}.footer-custom{background-color:#012d74}.footer-custom .footer-content{overflow:hidden}.footer-custom .footer-logo{float:left;padding:6px 0}.footer-custom .footer-logo .logo-content,.footer-custom .footer-logo p{display:inline-block;vertical-align:middle}.footer-custom .footer-logo .logo-content{height:25px;margin-right:16px}.footer-custom .footer-logo p{margin:0;font-size:11px;color:#fff}.footer-custom .footer-nav{float:right;padding:8px 0}.footer-custom .footer-nav ul{padding:0;margin:0}.footer-custom .footer-nav ul li{display:inline-block;margin-right:48px;vertical-align:middle}.footer-custom .footer-nav ul li:last-child{margin-right:0}.footer-custom .footer-nav ul a{display:block;font-size:13px;color:#fff;text-decoration:none}@media (max-width:850px){.footer-custom .footer-content{padding:16px}.footer-custom .footer-logo,.footer-custom .footer-nav{float:none}.footer-custom .footer-logo{margin-bottom:24px}.footer-custom .footer-logo .logo-content,.footer-custom .footer-logo p{display:block}.footer-custom .footer-logo .logo-content{width:127px;height:46px;margin-bottom:24px}.footer-custom .footer-nav{padding:0}.footer-custom .footer-nav li{display:block!important;margin:0 0 16px!important}.footer-custom .footer-nav li:last-child{margin:0!important}}.navbar{padding:0;min-height:80px;min-height:64px}.navbar,.navbar.bg-dark,.navbar.bg-light{background-color:#012d74!important}.navbar,.navbar.bg-dark,.navbar.bg-light,.navbar.bg-primary{color:#fff}.navbar .navbar-brand,.navbar .navbar-brand:hover{color:inherit;margin-left:16px}.navbar button.navbar-toggler{min-height:inherit;outline:0;border-color:transparent;color:inherit;padding:0 16px}.navbar button.navbar-toggler span.navbar-toggler-icon{background:0 0;height:unset;cursor:pointer}.navbar button.navbar-toggler span.navbar-toggler-icon::after{content:"\f130";font-family:icons;line-height:initial}.navbar button.navbar-toggler[aria-expanded=true] span.navbar-toggler-icon::after{content:"\f112"}.navbar div.navbar-collapse{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;min-height:inherit;margin-right:16px}.navbar div.navbar-collapse ul.navbar-nav{min-height:inherit}.navbar div.navbar-collapse ul.navbar-nav li.nav-item{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;padding:0 20px;min-height:56px}.navbar div.navbar-collapse ul.navbar-nav li.nav-item a.nav-link{color:#fff;position:relative;-webkit-box-flex:1;-ms-flex:1;flex:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-size:13px;padding:0;min-height:inherit;text-transform:uppercase}.navbar div.navbar-collapse ul.navbar-nav li.nav-item a.nav-link.disabled{color:rgba(255,255,255,.25)}.navbar div.navbar-collapse ul.navbar-nav li.nav-item a.nav-link.disabled:hover{font-weight:400}.navbar div.navbar-collapse ul.navbar-nav li.nav-item.dropdown{-webkit-box-shadow:none;box-shadow:none}.navbar div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu{display:none}.navbar div.navbar-collapse ul.navbar-nav li.nav-item.active{border-bottom:4px solid #2cc0d5;border-top:4px solid transparent}.navbar div.navbar-collapse ul.navbar-nav li.nav-item.active a.nav-link{font-weight:700}@media (max-width:575px){.navbar.navbar-expand-sm div.navbar-collapse{margin-right:0}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item{padding:0;min-height:50px;border:none;border-bottom:1px solid #112356}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item a.nav-link{padding:0 20px;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;text-transform:capitalize}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle::after{font-family:icons;content:"\f134";color:#2cc0d5;font-weight:700;width:unset;height:unset}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle[aria-expanded=true]{background-color:#0063bd}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle[aria-expanded=true]::after{content:"\f12b";margin-top:12px;color:#fff}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle[aria-expanded=true]+.dropdown-menu{display:block}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu{background-color:transparent;-webkit-box-shadow:initial;box-shadow:initial;border:none;padding:0 20px;margin-top:0;max-height:unset}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item{padding:0;color:#fff;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;min-height:50px;margin-right:unset;font-size:12px;text-transform:capitalize}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item:hover{background-color:transparent}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item:last-child{margin-bottom:8px}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;text-decoration:none;color:#fff;min-height:50px}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a::after{font-family:icons;content:"\f134";font-size:10px;font-weight:700;color:#2cc0d5}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a.dropdown-submenu-toggled{color:#fff}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a.dropdown-submenu-toggled::after{content:"\f12b";margin-top:10px;color:#fff}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>ul.dropdown-menu li{padding:0;color:#fff;font-size:12px;min-height:50px;line-height:50px;font-weight:400}.navbar.navbar-expand-sm div.navbar-collapse ul.navbar-nav li.nav-item:last-child{margin-bottom:8px;border:none}}@media (max-width:767px){.navbar.navbar-expand-md div.navbar-collapse{margin-right:0}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item{padding:0;min-height:50px;border:none;border-bottom:1px solid #112356}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item a.nav-link{padding:0 20px;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;text-transform:capitalize}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle::after{font-family:icons;content:"\f134";color:#2cc0d5;font-weight:700;width:unset;height:unset}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle[aria-expanded=true]{background-color:#0063bd}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle[aria-expanded=true]::after{content:"\f12b";margin-top:12px;color:#fff}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle[aria-expanded=true]+.dropdown-menu{display:block}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu{background-color:transparent;-webkit-box-shadow:initial;box-shadow:initial;border:none;padding:0 20px;margin-top:0;max-height:unset}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item{padding:0;color:#fff;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;min-height:50px;margin-right:unset;font-size:12px;text-transform:capitalize}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item:hover{background-color:transparent}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item:last-child{margin-bottom:8px}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;text-decoration:none;color:#fff;min-height:50px}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a::after{font-family:icons;content:"\f134";font-size:10px;font-weight:700;color:#2cc0d5}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a.dropdown-submenu-toggled{color:#fff}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a.dropdown-submenu-toggled::after{content:"\f12b";margin-top:10px;color:#fff}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>ul.dropdown-menu li{padding:0;color:#fff;font-size:12px;min-height:50px;line-height:50px;font-weight:400}.navbar.navbar-expand-md div.navbar-collapse ul.navbar-nav li.nav-item:last-child{margin-bottom:8px;border:none}}@media (max-width:991px){.navbar.navbar-expand-lg div.navbar-collapse{margin-right:0}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item{padding:0;min-height:50px;border:none;border-bottom:1px solid #112356}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item a.nav-link{padding:0 20px;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;text-transform:capitalize}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle::after{font-family:icons;content:"\f134";color:#2cc0d5;font-weight:700;width:unset;height:unset}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle[aria-expanded=true]{background-color:#0063bd}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle[aria-expanded=true]::after{content:"\f12b";margin-top:12px;color:#fff}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle[aria-expanded=true]+.dropdown-menu{display:block}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu{background-color:transparent;-webkit-box-shadow:initial;box-shadow:initial;border:none;padding:0 20px;margin-top:0;max-height:unset}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item{padding:0;color:#fff;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;min-height:50px;margin-right:unset;font-size:12px;text-transform:capitalize}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item:hover{background-color:transparent}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item:last-child{margin-bottom:8px}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;text-decoration:none;color:#fff;min-height:50px}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a::after{font-family:icons;content:"\f134";font-size:10px;font-weight:700;color:#2cc0d5}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a.dropdown-submenu-toggled{color:#fff}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a.dropdown-submenu-toggled::after{content:"\f12b";margin-top:10px;color:#fff}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>ul.dropdown-menu li{padding:0;color:#fff;font-size:12px;min-height:50px;line-height:50px;font-weight:400}.navbar.navbar-expand-lg div.navbar-collapse ul.navbar-nav li.nav-item:last-child{margin-bottom:8px;border:none}}@media (max-width:1199px){.navbar.navbar-expand-xl div.navbar-collapse{margin-right:0}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item{padding:0;min-height:50px;border:none;border-bottom:1px solid #112356}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item a.nav-link{padding:0 20px;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;text-transform:capitalize}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle::after{font-family:icons;content:"\f134";color:#2cc0d5;font-weight:700;width:unset;height:unset}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle[aria-expanded=true]{background-color:#0063bd}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle[aria-expanded=true]::after{content:"\f12b";margin-top:12px;color:#fff}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle[aria-expanded=true]+.dropdown-menu{display:block}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu{background-color:transparent;-webkit-box-shadow:initial;box-shadow:initial;border:none;padding:0 20px;margin-top:0;max-height:unset}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item{padding:0;color:#fff;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;min-height:50px;margin-right:unset;font-size:12px;text-transform:capitalize}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item:hover{background-color:transparent}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item:last-child{margin-bottom:8px}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;text-decoration:none;color:#fff;min-height:50px}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a::after{font-family:icons;content:"\f134";font-size:10px;font-weight:700;color:#2cc0d5}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a.dropdown-submenu-toggled{color:#fff}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>a.dropdown-submenu-toggled::after{content:"\f12b";margin-top:10px;color:#fff}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item.dropdown .dropdown-menu .dropdown-item.dropdown-submenu>ul.dropdown-menu li{padding:0;color:#fff;font-size:12px;min-height:50px;line-height:50px;font-weight:400}.navbar.navbar-expand-xl div.navbar-collapse ul.navbar-nav li.nav-item:last-child{margin-bottom:8px;border:none}}.navbar-header{background-color:#fff;width:100%;height:40px;line-height:40px;padding:0 16px;font-size:11px;display:-webkit-box;display:-ms-flexbox;display:flex}.navbar-header div.navbar-header-content i.icon{vertical-align:unset;margin-right:8px}.navbar-header button{cursor:pointer;border:none;background-color:transparent;color:orange;font-weight:700;padding:0;width:-webkit-min-content;width:-moz-min-content;width:min-content;margin-left:32px}@media (max-width:768px){.navbar-header{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.navbar-header button{margin-left:0}}.alert{padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-bottom:6px solid transparent;font-family:Flexo;font-size:13px;border-radius:6px}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible .close{position:relative;top:-.75rem;right:-1.25rem;padding:.75rem 1.25rem;color:inherit}.alert-warning{color:#282828;background-color:#fffcef;border-color:#ff7800;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.alert-warning button.close{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.alert-warning button.close i{font-size:9px;color:#fff;line-height:16px;width:16px;height:16px;border-radius:50%;background-color:#ff7800}.alert-warning div.alert-icon{border:transparent}.alert-warning div.alert-content{position:relative;margin:0 16px;-webkit-box-flex:1;-ms-flex:1;flex:1}.alert-warning div.alert-content p{margin-top:0;margin-bottom:0}.alert-warning-icon{color:#ff7800;width:16px;height:16px;font-size:16px}.alert-error{color:#282828;background-color:#ffe0e8;border-color:#da2329;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.alert-error button.close{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.alert-error button.close i{font-size:9px;color:#fff;line-height:16px;width:16px;height:16px;border-radius:50%;background-color:#da2329}.alert-error div.alert-icon{border:transparent}.alert-error div.alert-content{position:relative;margin:0 16px;-webkit-box-flex:1;-ms-flex:1;flex:1}.alert-error div.alert-content p{margin-top:0;margin-bottom:0}.alert-error-icon{color:#da2329;width:16px;height:16px;font-size:16px}.alert-success{color:#282828;background-color:#ecf9d6;border-color:#93c737;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.alert-success button.close{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.alert-success button.close i{font-size:9px;color:#fff;line-height:16px;width:16px;height:16px;border-radius:50%;background-color:#93c737}.alert-success div.alert-icon{border:transparent}.alert-success div.alert-content{position:relative;margin:0 16px;-webkit-box-flex:1;-ms-flex:1;flex:1}.alert-success div.alert-content p{margin-top:0;margin-bottom:0}.alert-success-icon{color:#93c737;width:16px;height:16px;font-size:16px}.alert-notif-container{position:relative;background-color:#fffcef;border-radius:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.alert-notif-container button.close{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.alert-notif-container button.close i{font-size:9px;color:#fff;line-height:16px;width:16px;height:16px;border-radius:50%;background-color:#2cc0d5}.alert-notif-container div.alert-icon{border:transparent}.alert-notif-container div.alert-content{position:relative;margin:0 16px;-webkit-box-flex:1;-ms-flex:1;flex:1}.alert-notif-container div.alert-content p{margin-top:0;margin-bottom:0}.alert-notif-container div.alert-content p.title{display:inline-block;font-weight:700}.alert-notif-container div.alert-content p.description b{color:#2cc0d5}.notif-error-icon{color:#da2329;width:32px;height:32px;font-size:32px}.notif-success-icon{color:#93c737;width:32px;height:32px;font-size:32px}.popovers-wrapper .popover{display:inline-block;vertical-align:middle;margin:10px}.popover{color:#282828;font-size:13px;text-align:center;background-color:#fff;border:none;-webkit-filter:drop-shadow(0 0 2px #a2b5d2);filter:drop-shadow(0 0 2px #a2b5d2);position:relative;border-radius:8px}.popover .popover-body{padding:16px}.popover .arrow:before{border:none}.popover p{margin:0}.bs-popover-top,.popover.bs-popover-auto[x-placement^=top]{top:-8px!important}.bs-popover-bottom,.popover.bs-popover-auto[x-placement^=bottom]{top:8px!important}.table-grid-custom thead th{text-align:center}.table-grid-custom thead span{display:block;font-weight:400}.select-custom{border:none;border-bottom:1px solid #1b2f73;padding:10px 0;font-size:15px;color:#282828;width:100%;background-color:#fff;outline:0}.tar-text{margin-bottom:.1rem}.align-baseline{vertical-align:baseline!important}.align-top{vertical-align:top!important}.align-middle{vertical-align:middle!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.align-text-top{vertical-align:text-top!important}.bg-primary{background-color:#ff7800!important}a.bg-primary:focus,a.bg-primary:hover{background-color:#cc6000!important}.bg-secondary{background-color:#2cc0d5!important}a.bg-secondary:focus,a.bg-secondary:hover{background-color:#229bac!important}.bg-success{background-color:#28a745!important}a.bg-success:focus,a.bg-success:hover{background-color:#1e7e34!important}.bg-info{background-color:#17a2b8!important}a.bg-info:focus,a.bg-info:hover{background-color:#117a8b!important}.bg-warning{background-color:#ffc107!important}a.bg-warning:focus,a.bg-warning:hover{background-color:#d39e00!important}.bg-danger{background-color:#dc3545!important}a.bg-danger:focus,a.bg-danger:hover{background-color:#bd2130!important}.bg-light{background-color:#f8f9fa!important}a.bg-light:focus,a.bg-light:hover{background-color:#dae0e5!important}.bg-dark{background-color:#343a40!important}a.bg-dark:focus,a.bg-dark:hover{background-color:#1d2124!important}.bg-white{background-color:#fff!important}.bg-transparent{background-color:transparent!important}.border{border:1px solid #e9ecef!important}.border-0{border:0!important}.border-top-0{border-top:0!important}.border-right-0{border-right:0!important}.border-bottom-0{border-bottom:0!important}.border-left-0{border-left:0!important}.border-primary{border-color:#ff7800!important}.border-secondary{border-color:#2cc0d5!important}.border-success{border-color:#28a745!important}.border-info{border-color:#17a2b8!important}.border-warning{border-color:#ffc107!important}.border-danger{border-color:#dc3545!important}.border-light{border-color:#f8f9fa!important}.border-dark{border-color:#343a40!important}.border-white{border-color:#fff!important}.rounded{border-radius:8px!important}.rounded-top{border-top-left-radius:8px!important;border-top-right-radius:8px!important}.rounded-right{border-top-right-radius:8px!important;border-bottom-right-radius:8px!important}.rounded-bottom{border-bottom-right-radius:8px!important;border-bottom-left-radius:8px!important}.rounded-left{border-top-left-radius:8px!important;border-bottom-left-radius:8px!important}.rounded-circle{border-radius:50%}.rounded-0{border-radius:0}.clearfix::after{display:block;clear:both;content:""}.d-none{display:none!important}.d-inline{display:inline!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-table{display:table!important}.d-table-cell{display:table-cell!important}.d-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.d-inline-flex{display:-webkit-inline-box!important;display:-ms-inline-flexbox!important;display:inline-flex!important}@media (min-width:576px){.d-sm-none{display:none!important}.d-sm-inline{display:inline!important}.d-sm-inline-block{display:inline-block!important}.d-sm-block{display:block!important}.d-sm-table{display:table!important}.d-sm-table-cell{display:table-cell!important}.d-sm-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.d-sm-inline-flex{display:-webkit-inline-box!important;display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:768px){.d-md-none{display:none!important}.d-md-inline{display:inline!important}.d-md-inline-block{display:inline-block!important}.d-md-block{display:block!important}.d-md-table{display:table!important}.d-md-table-cell{display:table-cell!important}.d-md-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.d-md-inline-flex{display:-webkit-inline-box!important;display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:1200px){.d-lg-none{display:none!important}.d-lg-inline{display:inline!important}.d-lg-inline-block{display:inline-block!important}.d-lg-block{display:block!important}.d-lg-table{display:table!important}.d-lg-table-cell{display:table-cell!important}.d-lg-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.d-lg-inline-flex{display:-webkit-inline-box!important;display:-ms-inline-flexbox!important;display:inline-flex!important}.d-xl-none{display:none!important}.d-xl-inline{display:inline!important}.d-xl-inline-block{display:inline-block!important}.d-xl-block{display:block!important}.d-xl-table{display:table!important}.d-xl-table-cell{display:table-cell!important}.d-xl-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.d-xl-inline-flex{display:-webkit-inline-box!important;display:-ms-inline-flexbox!important;display:inline-flex!important}}.d-print-block{display:none!important}@media print{.d-print-block{display:block!important}}.d-print-inline{display:none!important}@media print{.d-print-inline{display:inline!important}}.d-print-inline-block{display:none!important}@media print{.d-print-inline-block{display:inline-block!important}.d-print-none{display:none!important}}.embed-responsive{position:relative;display:block;width:100%;padding:0;overflow:hidden}.embed-responsive::before{display:block;content:""}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-21by9::before{padding-top:42.85714%}.embed-responsive-16by9::before{padding-top:56.25%}.embed-responsive-4by3::before{padding-top:75%}.embed-responsive-1by1::before{padding-top:100%}.flex-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.justify-content-start{-webkit-box-pack:start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-end{-webkit-box-pack:end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-center{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-between{-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-start{-webkit-box-align:start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-end{-webkit-box-align:end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-center{-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-baseline{-webkit-box-align:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-stretch{-webkit-box-align:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-auto{-ms-flex-item-align:auto!important;-ms-grid-row-align:auto!important;align-self:auto!important}.align-self-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-center{-ms-flex-item-align:center!important;-ms-grid-row-align:center!important;align-self:center!important}.align-self-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-stretch{-ms-flex-item-align:stretch!important;-ms-grid-row-align:stretch!important;align-self:stretch!important}@media (min-width:576px){.flex-sm-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-sm-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-sm-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-sm-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-sm-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-sm-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-sm-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.justify-content-sm-start{-webkit-box-pack:start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-sm-end{-webkit-box-pack:end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-sm-center{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-sm-between{-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-sm-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-sm-start{-webkit-box-align:start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-sm-end{-webkit-box-align:end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-sm-center{-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-sm-baseline{-webkit-box-align:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-sm-stretch{-webkit-box-align:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-sm-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-sm-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-sm-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-sm-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-sm-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-sm-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-sm-auto{-ms-flex-item-align:auto!important;-ms-grid-row-align:auto!important;align-self:auto!important}.align-self-sm-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-sm-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-sm-center{-ms-flex-item-align:center!important;-ms-grid-row-align:center!important;align-self:center!important}.align-self-sm-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-sm-stretch{-ms-flex-item-align:stretch!important;-ms-grid-row-align:stretch!important;align-self:stretch!important}}@media (min-width:768px){.flex-md-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-md-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-md-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-md-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-md-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-md-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-md-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.justify-content-md-start{-webkit-box-pack:start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-md-end{-webkit-box-pack:end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-md-center{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-md-between{-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-md-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-md-start{-webkit-box-align:start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-md-end{-webkit-box-align:end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-md-center{-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-md-baseline{-webkit-box-align:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-md-stretch{-webkit-box-align:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-md-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-md-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-md-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-md-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-md-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-md-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-md-auto{-ms-flex-item-align:auto!important;-ms-grid-row-align:auto!important;align-self:auto!important}.align-self-md-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-md-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-md-center{-ms-flex-item-align:center!important;-ms-grid-row-align:center!important;align-self:center!important}.align-self-md-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-md-stretch{-ms-flex-item-align:stretch!important;-ms-grid-row-align:stretch!important;align-self:stretch!important}}.float-left{float:left!important}.float-right{float:right!important}.float-none{float:none!important}@media (min-width:576px){.float-sm-left{float:left!important}.float-sm-right{float:right!important}.float-sm-none{float:none!important}}@media (min-width:768px){.float-md-left{float:left!important}.float-md-right{float:right!important}.float-md-none{float:none!important}}.position-static{position:static!important}.position-relative{position:relative!important}.position-absolute{position:absolute!important}.position-fixed{position:fixed!important}.position-sticky{position:sticky!important}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.fixed-bottom{position:fixed;right:0;bottom:0;left:0;z-index:1030}@supports (position:sticky){.sticky-top{position:sticky;top:0;z-index:1020}}.sr-only{position:absolute;width:1px;height:1px;padding:0;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;-webkit-clip-path:inset(50%);clip-path:inset(50%);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;overflow:visible;clip:auto;white-space:normal;-webkit-clip-path:none;clip-path:none}.w-25{width:25%!important}.w-50{width:50%!important}.w-75{width:75%!important}.w-100{width:100%!important}.h-25{height:25%!important}.h-50{height:50%!important}.h-75{height:75%!important}.h-100{height:100%!important}.mw-100{max-width:100%!important}.mh-100{max-height:100%!important}.m-0{margin:0!important}.mt-0,.my-0{margin-top:0!important}.mr-0,.mx-0{margin-right:0!important}.mb-0,.my-0{margin-bottom:0!important}.ml-0,.mx-0{margin-left:0!important}.m-1{margin:.25rem!important}.mt-1,.my-1{margin-top:.25rem!important}.mr-1,.mx-1{margin-right:.25rem!important}.mb-1,.my-1{margin-bottom:.25rem!important}.ml-1,.mx-1{margin-left:.25rem!important}.m-2{margin:.5rem!important}.mt-2,.my-2{margin-top:.5rem!important}.mr-2,.mx-2{margin-right:.5rem!important}.mb-2,.my-2{margin-bottom:.5rem!important}.ml-2,.mx-2{margin-left:.5rem!important}.m-3{margin:1rem!important}.mt-3,.my-3{margin-top:1rem!important}.mr-3,.mx-3{margin-right:1rem!important}.mb-3,.my-3{margin-bottom:1rem!important}.ml-3,.mx-3{margin-left:1rem!important}.m-4{margin:1.5rem!important}.mt-4,.my-4{margin-top:1.5rem!important}.mr-4,.mx-4{margin-right:1.5rem!important}.mb-4,.my-4{margin-bottom:1.5rem!important}.ml-4,.mx-4{margin-left:1.5rem!important}.m-5{margin:3rem!important}.mt-5,.my-5{margin-top:3rem!important}.mr-5,.mx-5{margin-right:3rem!important}.mb-5,.my-5{margin-bottom:3rem!important}.ml-5,.mx-5{margin-left:3rem!important}.p-0{padding:0!important}.pt-0,.py-0{padding-top:0!important}.pr-0,.px-0{padding-right:0!important}.pb-0,.py-0{padding-bottom:0!important}.pl-0,.px-0{padding-left:0!important}.p-1{padding:.25rem!important}.pt-1,.py-1{padding-top:.25rem!important}.pr-1,.px-1{padding-right:.25rem!important}.pb-1,.py-1{padding-bottom:.25rem!important}.pl-1,.px-1{padding-left:.25rem!important}.p-2{padding:.5rem!important}.pt-2,.py-2{padding-top:.5rem!important}.pr-2,.px-2{padding-right:.5rem!important}.pb-2,.py-2{padding-bottom:.5rem!important}.pl-2,.px-2{padding-left:.5rem!important}.p-3{padding:1rem!important}.pt-3,.py-3{padding-top:1rem!important}.pr-3,.px-3{padding-right:1rem!important}.pb-3,.py-3{padding-bottom:1rem!important}.pl-3,.px-3{padding-left:1rem!important}.p-4{padding:1.5rem!important}.pt-4,.py-4{padding-top:1.5rem!important}.pr-4,.px-4{padding-right:1.5rem!important}.pb-4,.py-4{padding-bottom:1.5rem!important}.pl-4,.px-4{padding-left:1.5rem!important}.p-5{padding:3rem!important}.pt-5,.py-5{padding-top:3rem!important}.pr-5,.px-5{padding-right:3rem!important}.pb-5,.py-5{padding-bottom:3rem!important}.pl-5,.px-5{padding-left:3rem!important}.m-auto{margin:auto!important}.mt-auto,.my-auto{margin-top:auto!important}.mr-auto,.mx-auto{margin-right:auto!important}.mb-auto,.my-auto{margin-bottom:auto!important}.ml-auto,.mx-auto{margin-left:auto!important}@media (min-width:576px){.m-sm-0{margin:0!important}.mt-sm-0,.my-sm-0{margin-top:0!important}.mr-sm-0,.mx-sm-0{margin-right:0!important}.mb-sm-0,.my-sm-0{margin-bottom:0!important}.ml-sm-0,.mx-sm-0{margin-left:0!important}.m-sm-1{margin:.25rem!important}.mt-sm-1,.my-sm-1{margin-top:.25rem!important}.mr-sm-1,.mx-sm-1{margin-right:.25rem!important}.mb-sm-1,.my-sm-1{margin-bottom:.25rem!important}.ml-sm-1,.mx-sm-1{margin-left:.25rem!important}.m-sm-2{margin:.5rem!important}.mt-sm-2,.my-sm-2{margin-top:.5rem!important}.mr-sm-2,.mx-sm-2{margin-right:.5rem!important}.mb-sm-2,.my-sm-2{margin-bottom:.5rem!important}.ml-sm-2,.mx-sm-2{margin-left:.5rem!important}.m-sm-3{margin:1rem!important}.mt-sm-3,.my-sm-3{margin-top:1rem!important}.mr-sm-3,.mx-sm-3{margin-right:1rem!important}.mb-sm-3,.my-sm-3{margin-bottom:1rem!important}.ml-sm-3,.mx-sm-3{margin-left:1rem!important}.m-sm-4{margin:1.5rem!important}.mt-sm-4,.my-sm-4{margin-top:1.5rem!important}.mr-sm-4,.mx-sm-4{margin-right:1.5rem!important}.mb-sm-4,.my-sm-4{margin-bottom:1.5rem!important}.ml-sm-4,.mx-sm-4{margin-left:1.5rem!important}.m-sm-5{margin:3rem!important}.mt-sm-5,.my-sm-5{margin-top:3rem!important}.mr-sm-5,.mx-sm-5{margin-right:3rem!important}.mb-sm-5,.my-sm-5{margin-bottom:3rem!important}.ml-sm-5,.mx-sm-5{margin-left:3rem!important}.p-sm-0{padding:0!important}.pt-sm-0,.py-sm-0{padding-top:0!important}.pr-sm-0,.px-sm-0{padding-right:0!important}.pb-sm-0,.py-sm-0{padding-bottom:0!important}.pl-sm-0,.px-sm-0{padding-left:0!important}.p-sm-1{padding:.25rem!important}.pt-sm-1,.py-sm-1{padding-top:.25rem!important}.pr-sm-1,.px-sm-1{padding-right:.25rem!important}.pb-sm-1,.py-sm-1{padding-bottom:.25rem!important}.pl-sm-1,.px-sm-1{padding-left:.25rem!important}.p-sm-2{padding:.5rem!important}.pt-sm-2,.py-sm-2{padding-top:.5rem!important}.pr-sm-2,.px-sm-2{padding-right:.5rem!important}.pb-sm-2,.py-sm-2{padding-bottom:.5rem!important}.pl-sm-2,.px-sm-2{padding-left:.5rem!important}.p-sm-3{padding:1rem!important}.pt-sm-3,.py-sm-3{padding-top:1rem!important}.pr-sm-3,.px-sm-3{padding-right:1rem!important}.pb-sm-3,.py-sm-3{padding-bottom:1rem!important}.pl-sm-3,.px-sm-3{padding-left:1rem!important}.p-sm-4{padding:1.5rem!important}.pt-sm-4,.py-sm-4{padding-top:1.5rem!important}.pr-sm-4,.px-sm-4{padding-right:1.5rem!important}.pb-sm-4,.py-sm-4{padding-bottom:1.5rem!important}.pl-sm-4,.px-sm-4{padding-left:1.5rem!important}.p-sm-5{padding:3rem!important}.pt-sm-5,.py-sm-5{padding-top:3rem!important}.pr-sm-5,.px-sm-5{padding-right:3rem!important}.pb-sm-5,.py-sm-5{padding-bottom:3rem!important}.pl-sm-5,.px-sm-5{padding-left:3rem!important}.m-sm-auto{margin:auto!important}.mt-sm-auto,.my-sm-auto{margin-top:auto!important}.mr-sm-auto,.mx-sm-auto{margin-right:auto!important}.mb-sm-auto,.my-sm-auto{margin-bottom:auto!important}.ml-sm-auto,.mx-sm-auto{margin-left:auto!important}}@media (min-width:768px){.m-md-0{margin:0!important}.mt-md-0,.my-md-0{margin-top:0!important}.mr-md-0,.mx-md-0{margin-right:0!important}.mb-md-0,.my-md-0{margin-bottom:0!important}.ml-md-0,.mx-md-0{margin-left:0!important}.m-md-1{margin:.25rem!important}.mt-md-1,.my-md-1{margin-top:.25rem!important}.mr-md-1,.mx-md-1{margin-right:.25rem!important}.mb-md-1,.my-md-1{margin-bottom:.25rem!important}.ml-md-1,.mx-md-1{margin-left:.25rem!important}.m-md-2{margin:.5rem!important}.mt-md-2,.my-md-2{margin-top:.5rem!important}.mr-md-2,.mx-md-2{margin-right:.5rem!important}.mb-md-2,.my-md-2{margin-bottom:.5rem!important}.ml-md-2,.mx-md-2{margin-left:.5rem!important}.m-md-3{margin:1rem!important}.mt-md-3,.my-md-3{margin-top:1rem!important}.mr-md-3,.mx-md-3{margin-right:1rem!important}.mb-md-3,.my-md-3{margin-bottom:1rem!important}.ml-md-3,.mx-md-3{margin-left:1rem!important}.m-md-4{margin:1.5rem!important}.mt-md-4,.my-md-4{margin-top:1.5rem!important}.mr-md-4,.mx-md-4{margin-right:1.5rem!important}.mb-md-4,.my-md-4{margin-bottom:1.5rem!important}.ml-md-4,.mx-md-4{margin-left:1.5rem!important}.m-md-5{margin:3rem!important}.mt-md-5,.my-md-5{margin-top:3rem!important}.mr-md-5,.mx-md-5{margin-right:3rem!important}.mb-md-5,.my-md-5{margin-bottom:3rem!important}.ml-md-5,.mx-md-5{margin-left:3rem!important}.p-md-0{padding:0!important}.pt-md-0,.py-md-0{padding-top:0!important}.pr-md-0,.px-md-0{padding-right:0!important}.pb-md-0,.py-md-0{padding-bottom:0!important}.pl-md-0,.px-md-0{padding-left:0!important}.p-md-1{padding:.25rem!important}.pt-md-1,.py-md-1{padding-top:.25rem!important}.pr-md-1,.px-md-1{padding-right:.25rem!important}.pb-md-1,.py-md-1{padding-bottom:.25rem!important}.pl-md-1,.px-md-1{padding-left:.25rem!important}.p-md-2{padding:.5rem!important}.pt-md-2,.py-md-2{padding-top:.5rem!important}.pr-md-2,.px-md-2{padding-right:.5rem!important}.pb-md-2,.py-md-2{padding-bottom:.5rem!important}.pl-md-2,.px-md-2{padding-left:.5rem!important}.p-md-3{padding:1rem!important}.pt-md-3,.py-md-3{padding-top:1rem!important}.pr-md-3,.px-md-3{padding-right:1rem!important}.pb-md-3,.py-md-3{padding-bottom:1rem!important}.pl-md-3,.px-md-3{padding-left:1rem!important}.p-md-4{padding:1.5rem!important}.pt-md-4,.py-md-4{padding-top:1.5rem!important}.pr-md-4,.px-md-4{padding-right:1.5rem!important}.pb-md-4,.py-md-4{padding-bottom:1.5rem!important}.pl-md-4,.px-md-4{padding-left:1.5rem!important}.p-md-5{padding:3rem!important}.pt-md-5,.py-md-5{padding-top:3rem!important}.pr-md-5,.px-md-5{padding-right:3rem!important}.pb-md-5,.py-md-5{padding-bottom:3rem!important}.pl-md-5,.px-md-5{padding-left:3rem!important}.m-md-auto{margin:auto!important}.mt-md-auto,.my-md-auto{margin-top:auto!important}.mr-md-auto,.mx-md-auto{margin-right:auto!important}.mb-md-auto,.my-md-auto{margin-bottom:auto!important}.ml-md-auto,.mx-md-auto{margin-left:auto!important}}.text-justify{text-align:justify!important}.text-nowrap{white-space:nowrap!important}.text-truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.text-left{text-align:left!important}.text-right{text-align:right!important}.text-center{text-align:center!important}@media (min-width:576px){.text-sm-left{text-align:left!important}.text-sm-right{text-align:right!important}.text-sm-center{text-align:center!important}}@media (min-width:768px){.text-md-left{text-align:left!important}.text-md-right{text-align:right!important}.text-md-center{text-align:center!important}}@media (min-width:1200px){.flex-lg-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-lg-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-lg-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-lg-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-lg-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-lg-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-lg-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.justify-content-lg-start{-webkit-box-pack:start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-lg-end{-webkit-box-pack:end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-lg-center{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-lg-between{-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-lg-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-lg-start{-webkit-box-align:start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-lg-end{-webkit-box-align:end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-lg-center{-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-lg-baseline{-webkit-box-align:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-lg-stretch{-webkit-box-align:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-lg-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-lg-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-lg-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-lg-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-lg-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-lg-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-lg-auto{-ms-flex-item-align:auto!important;-ms-grid-row-align:auto!important;align-self:auto!important}.align-self-lg-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-lg-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-lg-center{-ms-flex-item-align:center!important;-ms-grid-row-align:center!important;align-self:center!important}.align-self-lg-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-lg-stretch{-ms-flex-item-align:stretch!important;-ms-grid-row-align:stretch!important;align-self:stretch!important}.flex-xl-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-xl-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-xl-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-xl-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-xl-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-xl-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-xl-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.justify-content-xl-start{-webkit-box-pack:start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-xl-end{-webkit-box-pack:end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-xl-center{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-xl-between{-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-xl-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-xl-start{-webkit-box-align:start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-xl-end{-webkit-box-align:end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-xl-center{-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-xl-baseline{-webkit-box-align:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-xl-stretch{-webkit-box-align:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-xl-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-xl-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-xl-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-xl-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-xl-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-xl-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-xl-auto{-ms-flex-item-align:auto!important;-ms-grid-row-align:auto!important;align-self:auto!important}.align-self-xl-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-xl-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-xl-center{-ms-flex-item-align:center!important;-ms-grid-row-align:center!important;align-self:center!important}.align-self-xl-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-xl-stretch{-ms-flex-item-align:stretch!important;-ms-grid-row-align:stretch!important;align-self:stretch!important}.float-lg-left{float:left!important}.float-lg-right{float:right!important}.float-lg-none{float:none!important}.float-xl-left{float:left!important}.float-xl-right{float:right!important}.float-xl-none{float:none!important}.m-lg-0{margin:0!important}.mt-lg-0,.my-lg-0{margin-top:0!important}.mr-lg-0,.mx-lg-0{margin-right:0!important}.mb-lg-0,.my-lg-0{margin-bottom:0!important}.ml-lg-0,.mx-lg-0{margin-left:0!important}.m-lg-1{margin:.25rem!important}.mt-lg-1,.my-lg-1{margin-top:.25rem!important}.mr-lg-1,.mx-lg-1{margin-right:.25rem!important}.mb-lg-1,.my-lg-1{margin-bottom:.25rem!important}.ml-lg-1,.mx-lg-1{margin-left:.25rem!important}.m-lg-2{margin:.5rem!important}.mt-lg-2,.my-lg-2{margin-top:.5rem!important}.mr-lg-2,.mx-lg-2{margin-right:.5rem!important}.mb-lg-2,.my-lg-2{margin-bottom:.5rem!important}.ml-lg-2,.mx-lg-2{margin-left:.5rem!important}.m-lg-3{margin:1rem!important}.mt-lg-3,.my-lg-3{margin-top:1rem!important}.mr-lg-3,.mx-lg-3{margin-right:1rem!important}.mb-lg-3,.my-lg-3{margin-bottom:1rem!important}.ml-lg-3,.mx-lg-3{margin-left:1rem!important}.m-lg-4{margin:1.5rem!important}.mt-lg-4,.my-lg-4{margin-top:1.5rem!important}.mr-lg-4,.mx-lg-4{margin-right:1.5rem!important}.mb-lg-4,.my-lg-4{margin-bottom:1.5rem!important}.ml-lg-4,.mx-lg-4{margin-left:1.5rem!important}.m-lg-5{margin:3rem!important}.mt-lg-5,.my-lg-5{margin-top:3rem!important}.mr-lg-5,.mx-lg-5{margin-right:3rem!important}.mb-lg-5,.my-lg-5{margin-bottom:3rem!important}.ml-lg-5,.mx-lg-5{margin-left:3rem!important}.p-lg-0{padding:0!important}.pt-lg-0,.py-lg-0{padding-top:0!important}.pr-lg-0,.px-lg-0{padding-right:0!important}.pb-lg-0,.py-lg-0{padding-bottom:0!important}.pl-lg-0,.px-lg-0{padding-left:0!important}.p-lg-1{padding:.25rem!important}.pt-lg-1,.py-lg-1{padding-top:.25rem!important}.pr-lg-1,.px-lg-1{padding-right:.25rem!important}.pb-lg-1,.py-lg-1{padding-bottom:.25rem!important}.pl-lg-1,.px-lg-1{padding-left:.25rem!important}.p-lg-2{padding:.5rem!important}.pt-lg-2,.py-lg-2{padding-top:.5rem!important}.pr-lg-2,.px-lg-2{padding-right:.5rem!important}.pb-lg-2,.py-lg-2{padding-bottom:.5rem!important}.pl-lg-2,.px-lg-2{padding-left:.5rem!important}.p-lg-3{padding:1rem!important}.pt-lg-3,.py-lg-3{padding-top:1rem!important}.pr-lg-3,.px-lg-3{padding-right:1rem!important}.pb-lg-3,.py-lg-3{padding-bottom:1rem!important}.pl-lg-3,.px-lg-3{padding-left:1rem!important}.p-lg-4{padding:1.5rem!important}.pt-lg-4,.py-lg-4{padding-top:1.5rem!important}.pr-lg-4,.px-lg-4{padding-right:1.5rem!important}.pb-lg-4,.py-lg-4{padding-bottom:1.5rem!important}.pl-lg-4,.px-lg-4{padding-left:1.5rem!important}.p-lg-5{padding:3rem!important}.pt-lg-5,.py-lg-5{padding-top:3rem!important}.pr-lg-5,.px-lg-5{padding-right:3rem!important}.pb-lg-5,.py-lg-5{padding-bottom:3rem!important}.pl-lg-5,.px-lg-5{padding-left:3rem!important}.m-lg-auto{margin:auto!important}.mt-lg-auto,.my-lg-auto{margin-top:auto!important}.mr-lg-auto,.mx-lg-auto{margin-right:auto!important}.mb-lg-auto,.my-lg-auto{margin-bottom:auto!important}.ml-lg-auto,.mx-lg-auto{margin-left:auto!important}.m-xl-0{margin:0!important}.mt-xl-0,.my-xl-0{margin-top:0!important}.mr-xl-0,.mx-xl-0{margin-right:0!important}.mb-xl-0,.my-xl-0{margin-bottom:0!important}.ml-xl-0,.mx-xl-0{margin-left:0!important}.m-xl-1{margin:.25rem!important}.mt-xl-1,.my-xl-1{margin-top:.25rem!important}.mr-xl-1,.mx-xl-1{margin-right:.25rem!important}.mb-xl-1,.my-xl-1{margin-bottom:.25rem!important}.ml-xl-1,.mx-xl-1{margin-left:.25rem!important}.m-xl-2{margin:.5rem!important}.mt-xl-2,.my-xl-2{margin-top:.5rem!important}.mr-xl-2,.mx-xl-2{margin-right:.5rem!important}.mb-xl-2,.my-xl-2{margin-bottom:.5rem!important}.ml-xl-2,.mx-xl-2{margin-left:.5rem!important}.m-xl-3{margin:1rem!important}.mt-xl-3,.my-xl-3{margin-top:1rem!important}.mr-xl-3,.mx-xl-3{margin-right:1rem!important}.mb-xl-3,.my-xl-3{margin-bottom:1rem!important}.ml-xl-3,.mx-xl-3{margin-left:1rem!important}.m-xl-4{margin:1.5rem!important}.mt-xl-4,.my-xl-4{margin-top:1.5rem!important}.mr-xl-4,.mx-xl-4{margin-right:1.5rem!important}.mb-xl-4,.my-xl-4{margin-bottom:1.5rem!important}.ml-xl-4,.mx-xl-4{margin-left:1.5rem!important}.m-xl-5{margin:3rem!important}.mt-xl-5,.my-xl-5{margin-top:3rem!important}.mr-xl-5,.mx-xl-5{margin-right:3rem!important}.mb-xl-5,.my-xl-5{margin-bottom:3rem!important}.ml-xl-5,.mx-xl-5{margin-left:3rem!important}.p-xl-0{padding:0!important}.pt-xl-0,.py-xl-0{padding-top:0!important}.pr-xl-0,.px-xl-0{padding-right:0!important}.pb-xl-0,.py-xl-0{padding-bottom:0!important}.pl-xl-0,.px-xl-0{padding-left:0!important}.p-xl-1{padding:.25rem!important}.pt-xl-1,.py-xl-1{padding-top:.25rem!important}.pr-xl-1,.px-xl-1{padding-right:.25rem!important}.pb-xl-1,.py-xl-1{padding-bottom:.25rem!important}.pl-xl-1,.px-xl-1{padding-left:.25rem!important}.p-xl-2{padding:.5rem!important}.pt-xl-2,.py-xl-2{padding-top:.5rem!important}.pr-xl-2,.px-xl-2{padding-right:.5rem!important}.pb-xl-2,.py-xl-2{padding-bottom:.5rem!important}.pl-xl-2,.px-xl-2{padding-left:.5rem!important}.p-xl-3{padding:1rem!important}.pt-xl-3,.py-xl-3{padding-top:1rem!important}.pr-xl-3,.px-xl-3{padding-right:1rem!important}.pb-xl-3,.py-xl-3{padding-bottom:1rem!important}.pl-xl-3,.px-xl-3{padding-left:1rem!important}.p-xl-4{padding:1.5rem!important}.pt-xl-4,.py-xl-4{padding-top:1.5rem!important}.pr-xl-4,.px-xl-4{padding-right:1.5rem!important}.pb-xl-4,.py-xl-4{padding-bottom:1.5rem!important}.pl-xl-4,.px-xl-4{padding-left:1.5rem!important}.p-xl-5{padding:3rem!important}.pt-xl-5,.py-xl-5{padding-top:3rem!important}.pr-xl-5,.px-xl-5{padding-right:3rem!important}.pb-xl-5,.py-xl-5{padding-bottom:3rem!important}.pl-xl-5,.px-xl-5{padding-left:3rem!important}.m-xl-auto{margin:auto!important}.mt-xl-auto,.my-xl-auto{margin-top:auto!important}.mr-xl-auto,.mx-xl-auto{margin-right:auto!important}.mb-xl-auto,.my-xl-auto{margin-bottom:auto!important}.ml-xl-auto,.mx-xl-auto{margin-left:auto!important}.text-lg-left{text-align:left!important}.text-lg-right{text-align:right!important}.text-lg-center{text-align:center!important}.text-xl-left{text-align:left!important}.text-xl-right{text-align:right!important}.text-xl-center{text-align:center!important}}.text-lowercase{text-transform:lowercase!important}.text-uppercase{text-transform:uppercase!important}.text-capitalize{text-transform:capitalize!important}.font-weight-light{font-weight:300!important}.font-weight-normal{font-weight:400!important}.font-weight-bold{font-weight:700!important}.font-italic{font-style:italic!important}.text-white{color:#fff!important}.text-primary{color:#ff7800!important}a.text-primary:focus,a.text-primary:hover{color:#cc6000!important}.text-secondary{color:#2cc0d5!important}a.text-secondary:focus,a.text-secondary:hover{color:#229bac!important}.text-success{color:#28a745!important}a.text-success:focus,a.text-success:hover{color:#1e7e34!important}.text-info{color:#17a2b8!important}a.text-info:focus,a.text-info:hover{color:#117a8b!important}.text-warning{color:#ffc107!important}a.text-warning:focus,a.text-warning:hover{color:#d39e00!important}.text-danger{color:#dc3545!important}a.text-danger:focus,a.text-danger:hover{color:#bd2130!important}.text-light{color:#f8f9fa!important}a.text-light:focus,a.text-light:hover{color:#dae0e5!important}.text-dark{color:#343a40!important}a.text-dark:focus,a.text-dark:hover{color:#1d2124!important}.text-muted{color:#868e96!important}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.visible{visibility:visible!important}.invisible{visibility:hidden!important}.footer-custom .footer-content{padding:5px 16px}.navbar-brand{padding-top:16px;padding-bottom:16px}.bs-datepicker{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap;background:#fff;-webkit-box-shadow:0 0 10px 0 #aaa;box-shadow:0 0 10px 0 #aaa;position:relative;z-index:1}.bs-datepicker:after{clear:both;content:'';display:block}.bs-datepicker bs-day-picker{float:left}.bs-datepicker button:active,.bs-datepicker button:focus,.bs-datepicker button:hover,.bs-datepicker input:active,.bs-datepicker input:focus,.bs-datepicker input:hover,.bs-datepicker-btns button:active,.bs-datepicker-btns button:focus,.bs-datepicker-btns button:hover,.bs-datepicker-predefined-btns button:active,.bs-datepicker-predefined-btns button:focus{outline:0}.bs-datepicker-head{min-width:270px;height:50px;padding:10px;border-radius:3px 3px 0 0;text-align:justify}.bs-datepicker-head:after{content:"";display:inline-block;vertical-align:top;width:100%}.bs-datepicker-head button{display:inline-block;vertical-align:top;padding:0;height:30px;line-height:30px;border:0;background:0 0;text-align:center;cursor:pointer;color:#fff;-webkit-transition:.3s;transition:.3s}.bs-datepicker-head button[disabled],.bs-datepicker-head button[disabled]:active,.bs-datepicker-head button[disabled]:hover{background:rgba(221,221,221,.3);color:#f5f5f5;cursor:not-allowed}.bs-datepicker-head button.next,.bs-datepicker-head button.previous{border-radius:50%;width:30px;height:30px}.bs-datepicker-head button.next span,.bs-datepicker-head button.previous span{font-size:28px;line-height:1;display:inline-block;position:relative;height:100%;width:100%;border-radius:50%}.bs-datepicker-head button.current{border-radius:15px;max-width:155px;padding:0 13px}.bs-datepicker-head button:hover{background-color:rgba(0,0,0,.1)}.bs-datepicker-head button:active{background-color:rgba(0,0,0,.2)}.bs-datepicker-body{padding:10px;border-radius:0 0 3px 3px;min-height:232px;min-width:278px;border:1px solid #e9edf0}.bs-datepicker-body .days.weeks{position:relative;z-index:1}.bs-datepicker-body table{width:100%;border-collapse:separate;border-spacing:0}.bs-datepicker-body table th{font-size:13px;color:#9aaec1;font-weight:400;text-align:center}.bs-datepicker-body table td{color:#54708b;text-align:center;position:relative;padding:0}.bs-datepicker-body table td span{display:block;margin:0 auto;font-size:13px;border-radius:50%;position:relative;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none}.bs-datepicker-body table td:not(.disabled) span{cursor:pointer}.bs-datepicker-body table td span.is-highlighted:not(.disabled):not(.selected),.bs-datepicker-body table td.is-highlighted:not(.disabled):not(.selected) span{background-color:#e9edf0;-webkit-transition:none;transition:none}.bs-datepicker-body table td span.disabled,.bs-datepicker-body table td.disabled span{color:#9aaec1}.bs-datepicker-body table td span.selected,.bs-datepicker-body table td.selected span{color:#fff}.bs-datepicker-body table td.active{position:relative}.bs-datepicker-body table td.active.select-start:before{left:35%}.bs-datepicker-body table td.active.select-end:before{left:-85%}.bs-datepicker-body table td span.active.select-end:after,.bs-datepicker-body table td span.active.select-start:after,.bs-datepicker-body table td.active.select-end span:after,.bs-datepicker-body table td.active.select-start span:after{content:"";display:block;position:absolute;z-index:-1;width:100%;height:100%;-webkit-transition:.3s;transition:.3s;top:0;border-radius:50%}.bs-datepicker-body table td span:before,.bs-datepicker-body table td:before{content:"";display:block;position:absolute;z-index:-1;top:6px;bottom:6px;left:-2px;right:-2px;-webkit-box-sizing:content-box;box-sizing:content-box;background:0 0}.bs-datepicker-body table td.active.select-start+td.active:before{left:-20%}.bs-datepicker-body table td:last-child.active:before{border-radius:0 3px 3px 0;width:125%;left:-25%}.bs-datepicker-body table td span[class*=select-],.bs-datepicker-body table td[class*=select-] span{border-radius:50%;color:#fff}.bs-datepicker-body table.days span.active:not(.select-start):before,.bs-datepicker-body table.days span.in-range:not(.select-start):before,.bs-datepicker-body table.days td.active:not(.select-start):before,.bs-datepicker-body table.days td.in-range:not(.select-start):before{background:#e9edf0}.bs-datepicker-body table.days span{width:32px;height:32px;line-height:32px}.bs-datepicker-body table.days span.select-start{z-index:2}.bs-datepicker-body table.days span.in-range.select-end:before,.bs-datepicker-body table.days span.is-highlighted.in-range:before{background:0 0;right:0;left:0}.bs-datepicker-body table.days td.active+td.is-highlighted:before,.bs-datepicker-body table.days td.active+td.select-end:before,.bs-datepicker-body table.days td.in-range+td.is-highlighted:before,.bs-datepicker-body table.days td.in-range+td.select-end:before,.bs-datepicker-body table.days td.select-start+td.is-highlighted:before,.bs-datepicker-body table.days td.select-start+td.select-end:before{background:#e9edf0;width:100%}.bs-datepicker-body table.weeks tr td:nth-child(2).active:before{border-radius:3px 0 0 3px;left:0;width:100%}.bs-datepicker-body table:not(.weeks) tr td:first-child:before{border-radius:3px 0 0 3px}.bs-datepicker-body table.years td span{width:46px;height:46px;line-height:45px;margin:0 auto}.bs-datepicker-body table.years tr:not(:last-child) td span{margin-bottom:8px}.bs-datepicker-body table.months td{height:52px}.bs-datepicker-body table.months td span{padding:6px;border-radius:15px}.bs-datepicker .current-timedate{color:#54708b;font-size:15px;text-align:center;height:30px;line-height:30px;border-radius:20px;border:1px solid #e9edf0;margin-bottom:10px;cursor:pointer;text-transform:uppercase;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none}.bs-datepicker .current-timedate span:not(:empty):before{content:"";width:15px;height:16px;display:inline-block;margin-right:4px;vertical-align:text-bottom;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAQCAYAAADJViUEAAABMklEQVQoU9VTwW3CQBCcOUgBtEBKSAukAnBKME+wFCAlYIhk8sQlxFABtJAScAsuAPBEewYcxCP8ouxrPDsza61uiVN1o6RNHD4htSCmq49RfO71BvMJqBBkITRf1kmUW49nQRC9h1I5AZlBClaL8aP1fKgOOxCx8aSLs+Q19eZuNO8QmPqJRtDFguy7OAcDbJPs+/BKVPDIPrvD2ZJgWAmVe7O0rI0Vqs1seyWUXpuJoppYCa5L+U++NpNPkr5OE2oMdARsb3gykJT5ydZcL8Z9Ww60nxg2LhjON9li9OwXZzo+xLbp3nC2s9CL2RrueGyVrgwNm8HpsCzZ9EEW6kqXlo1GQe03FzP/7W8Hl0dBtu7Bf7zt6mIwvX1RvzDCm7+q3mAW0Dl/GPdUCeXrZLT9BrDrGkm4qlPvAAAAAElFTkSuQmCC)}.bs-datepicker-multiple{display:inline-block;border-radius:4px 0 0 4px}.bs-datepicker-multiple+.bs-datepicker-multiple{margin-left:10px}.bs-datepicker-multiple .bs-datepicker{-webkit-box-shadow:none;box-shadow:none;position:relative}.bs-datepicker-multiple .bs-datepicker:not(:last-child){padding-right:10px}.bs-datepicker-multiple .bs-datepicker+.bs-datepicker:after{content:"";display:block;width:14px;height:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAKCAYAAABrGwT5AAAA1ElEQVQoU42RsQrCUAxF77VuDu7O4oMWW//BURBBpZvgKk4uIrjoqKOTf+DopIO4uYggtFTfw3+pkQqCW1/G5J7kJiFy4m5MxUlxAzgIPHX+lzMPzupRYlYgxiR7vqsOP8YKzsTx0yxFMCUZ+q7aZzlr+OvgoWcAFyAHgat2jLWu48252DdqAihDJGSSJNUUxYmQjs3+hPQBlAh2rG2LCOPnaw3IiGDX99TRCs7ASJsNhUOA7d/LcuHvRG22FIZvsNXw1MX6VZExCilOQKEfeLXr/10+aC9Ho7arh7oAAAAASUVORK5CYII=);position:absolute;top:25px;left:-8px}.bs-datepicker-multiple .bs-datepicker .left{float:left}.bs-datepicker-multiple .bs-datepicker .right{float:right}.bs-datepicker-container{padding:15px}.bs-datepicker-custom-range{padding:15px;background:#eee}.bs-datepicker-predefined-btns button{width:100%;display:block;height:30px;background-color:#9aaec1;border-radius:4px;color:#fff;border:0;margin-bottom:10px;padding:0 18px;text-align:left;-webkit-transition:.3s;transition:.3s}.bs-datepicker-predefined-btns button:active,.bs-datepicker-predefined-btns button:hover{background-color:#54708b}.bs-datepicker .is-other-month{color:rgba(0,0,0,.25)}.bs-datepicker-buttons{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;padding-top:10px;border-top:1px solid #e9edf0}.bs-datepicker-buttons .btn-default{margin-left:10px}.bs-timepicker-container{padding:10px 0}.bs-timepicker-label{color:#54708b;margin-bottom:10px}.bs-timepicker-controls{display:inline-block;vertical-align:top;margin-right:10px}.bs-timepicker-controls button{width:20px;height:20px;border-radius:50%;border:0;background-color:#e9edf0;color:#54708b;font-size:16px;font-weight:700;vertical-align:middle;line-height:0;padding:0;-webkit-transition:.3s;transition:.3s}.bs-timepicker-controls button:hover{background-color:#d5dadd}.bs-timepicker-controls input{width:35px;height:25px;border-radius:13px;text-align:center;border:1px solid #e9edf0}.bs-timepicker .switch-time-format{text-transform:uppercase;min-width:54px;height:25px;border-radius:20px;border:1px solid #e9edf0;background:#fff;color:#54708b;font-size:13px}.bs-timepicker .switch-time-format img{vertical-align:initial;margin-left:4px}bs-datepicker-container,bs-daterangepicker-container{z-index:1080}@media (max-width:768px){.bs-datepicker-multiple{display:-webkit-box;display:-ms-flexbox;display:flex}.bs-datepicker-multiple+.bs-datepicker-multiple{margin-top:10px;margin-left:0}}.theme-default .bs-datepicker-body table td span.selected,.theme-default .bs-datepicker-body table td span[class*=select-]:after,.theme-default .bs-datepicker-body table td.selected span,.theme-default .bs-datepicker-body table td[class*=select-] span:after,.theme-default .bs-datepicker-head{background-color:#777}.theme-default .bs-datepicker-body table td.week span{color:#777}.theme-green .bs-datepicker-body table td span.selected,.theme-green .bs-datepicker-body table td span[class*=select-]:after,.theme-green .bs-datepicker-body table td.selected span,.theme-green .bs-datepicker-body table td[class*=select-] span:after,.theme-green .bs-datepicker-head{background-color:#5cb85c}.theme-green .bs-datepicker-body table td.week span{color:#5cb85c}.theme-blue .bs-datepicker-body table td span.selected,.theme-blue .bs-datepicker-body table td span[class*=select-]:after,.theme-blue .bs-datepicker-body table td.selected span,.theme-blue .bs-datepicker-body table td[class*=select-] span:after,.theme-blue .bs-datepicker-head{background-color:#5bc0de}.theme-blue .bs-datepicker-body table td.week span{color:#5bc0de}.theme-dark-blue .bs-datepicker-body table td span.selected,.theme-dark-blue .bs-datepicker-body table td span[class*=select-]:after,.theme-dark-blue .bs-datepicker-body table td.selected span,.theme-dark-blue .bs-datepicker-body table td[class*=select-] span:after,.theme-dark-blue .bs-datepicker-head{background-color:#337ab7}.theme-dark-blue .bs-datepicker-body table td.week span{color:#337ab7}.theme-red .bs-datepicker-body table td span.selected,.theme-red .bs-datepicker-body table td span[class*=select-]:after,.theme-red .bs-datepicker-body table td.selected span,.theme-red .bs-datepicker-body table td[class*=select-] span:after,.theme-red .bs-datepicker-head{background-color:#d9534f}.theme-red .bs-datepicker-body table td.week span{color:#d9534f}.theme-orange .bs-datepicker-body table td span.selected,.theme-orange .bs-datepicker-body table td span[class*=select-]:after,.theme-orange .bs-datepicker-body table td.selected span,.theme-orange .bs-datepicker-body table td[class*=select-] span:after,.theme-orange .bs-datepicker-head{background-color:#f0ad4e}.theme-orange .bs-datepicker-body table td.week span{color:#f0ad4e}.wizard li:before{width:32px;height:32px;margin-bottom:0;line-height:32px;font-size:14px;border:2.5px solid #93c737;-webkit-box-sizing:border-box;box-sizing:border-box}.wizard li.active:before,.wizard li.active~li:before{line-height:26px;-webkit-box-sizing:border-box;box-sizing:border-box}.wizard li+li:after{top:16px;height:2px}.wizard li span[desktop]{font-size:12px;height:24px;margin-right:7px}bcp-title>.title{font-size:24px;font-weight:700;font-style:normal;font-stretch:normal;line-height:1.33;letter-spacing:normal;text-align:center;color:#012d74;margin-bottom:0}bcp-title>.subtitle{font-size:16px;font-weight:400;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;display:block;text-align:center;color:#012d74}.progress-example{border-radius:5px;margin-top:30px;margin-bottom:30px;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;max-width:100%}@media screen and (max-width:576px){.progress-container,.progress-example{margin-top:24px;margin-bottom:24px}.wizard li span[mobile]{display:none}bcp-title>.title{margin-bottom:4px}}div[keypadMark]{width:100%;text-align:center;margin-top:48px}div[keypadSeed]{width:100%;text-align:center}div[keypadSeed] img{width:49px;height:49px;cursor:pointer}.error-msg,form .invalid-feedback{width:100%;height:23px;font-size:12px;font-weight:400;font-style:normal;font-stretch:normal;line-height:1.33;letter-spacing:.5px;color:#ff003b}.dropdown .title-dropdown,.dropup .title-dropdown{font-size:14px}.modal-content,.modal-custom .modal-content{border-radius:8px;min-width:290px;border:0}.modal-content .modal-header,.modal-custom .modal-content .modal-header{border-bottom:0;padding:17px 17px 10px}.modal-content .modal-header .close,.modal-custom .modal-content .modal-header .close{opacity:unset;font-size:14px;height:14px}.modal-content .modal-header .close:focus,.modal-custom .modal-content .modal-header .close:focus{outline:0}.modal-content .modal-header .custom-closing-button,.modal-custom .modal-content .modal-header .custom-closing-button{color:#ff7800;font-size:14px;height:14px;width:14px}.modal-content .modal-header .custom-closing-button:hover,.modal-custom .modal-content .modal-header .custom-closing-button:hover{cursor:pointer}.modal-content .modal-header .close-favorite-modal,.modal-custom .modal-content .modal-header .close-favorite-modal{padding:0;background:0 0;border:0;-webkit-appearance:none}.modal-content .modal-header .blocking-type-modal,.modal-custom .modal-content .modal-header .blocking-type-modal{height:14px}.modal-content .modal-body,.modal-custom .modal-content .modal-body{padding:0 16px}.modal-content .modal-body .body-content,.modal-custom .modal-content .modal-body .body-content{padding:0;overflow-x:hidden}.modal-content .modal-body .body-content form label,.modal-content .modal-body .body-content form.form-control label,.modal-content .modal-body .body-content label,.modal-custom .modal-content .modal-body .body-content form label,.modal-custom .modal-content .modal-body .body-content form.form-control label,.modal-custom .modal-content .modal-body .body-content label{color:#002d87;font-family:Flexo;font-size:14px!important;font-stretch:normal;font-style:normal;font-weight:700;left:0;letter-spacing:normal!important;line-height:1.14}.modal-content .modal-body .body-content p,.modal-custom .modal-content .modal-body .body-content p{color:#282828;font-size:14px;line-height:1.71;margin-bottom:8px}.modal-content .modal-body .body-title,.modal-custom .modal-content .modal-body .body-title{margin-bottom:16px}.modal-content .modal-body .body-title h4,.modal-custom .modal-content .modal-body .body-title h4{color:#002d87;font-family:Flexo;font-stretch:normal;font-style:normal;font-weight:700;height:24px;letter-spacing:normal;line-height:1.33;text-align:center;font-size:18px}.modal-content .modal-body p,.modal-custom .modal-content .modal-body p{margin-bottom:8px}.modal-content .modal-body nkolaa-text-box .invalid-feedback,.modal-custom .modal-content .modal-body nkolaa-text-box .invalid-feedback{text-align:left}.modal-content .modal-body textarea.form-control,.modal-custom .modal-content .modal-body textarea.form-control{border:1px solid #7194bd!important;margin-top:8px!important;padding:10px!important}.modal-content .modal-footer,.modal-custom .modal-content .modal-footer{background-color:#fff;border-bottom-left-radius:8px;border-bottom-right-radius:8px;border-top:0}.modal-content .modal-footer button,.modal-custom .modal-content .modal-footer button{width:100%}.modal-content .modal-footer .favorite-modal-cancel,.modal-custom .modal-content .modal-footer .favorite-modal-cancel{margin-top:16px}.time-out-modal .body-title h4{color:#444!important}.time-out-modal .modal-content .modal-header{border-bottom:0;padding:17px 17px 9px 0}.time-out-modal .modal-body{padding-bottom:0}.time-out-modal .modal-content .modal-footer button{width:130px}.welcome-home-md .modal-content{z-index:3000}.welcome-home-md .modal-content .modal-body{padding-bottom:0}.teleton-home-md{min-height:438px;min-width:288px}.teleton-home-md .modal-content{min-height:438px;min-width:288px;background:url(https://colita.colita.com/assets/img/teleton/POP-UP-RESPONSIVE.png) no-repeat}.teleton-home-md .modal-content .modal-default-style{background:0 0;position:absolute;bottom:20px;width:100%}.teleton-home-md .modal-content .modal-default-style div{text-align:center}.teleton-home-md .modal-content .modal-default-style div .btn{padding:0 16px;max-width:120px;width:100%}.SaveChangesMyProduct .modal-body .body p{margin-top:58px}.delete-transfer .modal-body .body p{margin-top:32px}.token-incorrect{width:100%}.token-incorrect .modal-body .body-title{margin-bottom:5px;margin-top:23px}.token-incorrect .body p{text-align:center;margin-bottom:16px;margin-top:25px}@media (min-width:360px){.delete-transfer .modal-body .body p{margin-top:0}}@media (min-width:576px){.modal-dialog.welcome-home-md{width:auto}.modal-content,.modal-custom .modal-content{min-width:522px}.modal-content .modal-header,.modal-custom .modal-content .modal-header{padding:17px 17px 1px}.modal-content .modal-footer button,.modal-custom .modal-content .modal-footer button button{padding:0;width:107px}.modal-content .modal-footer .favorite-modal-cancel,.modal-custom .modal-content .modal-footer button .favorite-modal-cancel{margin-top:0}.token-incorrect{width:100%}.token-incorrect .modal-body .body-title{margin-bottom:5px;margin-top:23px}.token-incorrect .body p{text-align:center;margin-bottom:16px;margin-top:25px}}@media (min-width:768px){.teleton-home-md{min-height:448px;min-width:395px}.teleton-home-md .modal-content{min-height:448px;min-width:395px;background:url(https://colita.colita.com/assets/img/teleton/POP-UP-TABLET.png) no-repeat}.teleton-home-md .modal-content .modal-default-style{bottom:20px}.teleton-home-md .modal-content .modal-default-style .btn{max-width:120px;width:100%}.modal-dialog.welcome-home-md{margin:0}.welcome-home-md .modal-content{margin-top:10%;min-width:592px}.modaltarLockTransaction{width:440px}.modaltarLockTransaction .modal-content .modal-body .body-title{margin-top:16px}.modaltarLockTransaction .modal-content .modal-body .body p{text-align:center;margin-bottom:0}.SaveChangesMyProduct .modal-body .body p{margin-top:40px}.token-incorrect{width:100%}.token-incorrect .body p{text-align:center;margin-bottom:15px;margin-top:25px}}@media (min-width:1200px){.teleton-home-md{min-height:416px;min-width:605px}.teleton-home-md .modal-content{min-height:416px;min-width:605px;background:url(https://colita.colita.com/assets/img/teleton/POP-UP-DESKTOP.png) no-repeat}.teleton-home-md .modal-content .modal-default-style{bottom:20px}.teleton-home-md .modal-content .modal-default-style .btn{max-width:120px;width:100%}}bcp-alert{border-radius:.25rem}bcp-alert .alert{padding:.625rem}bcp-alert .alert-icon{display:none}bcp-alert .alert div.alert-content{margin:0}bcp-alert p{color:#484848!important;margin-bottom:0!important}bcp-alert .icon:first-of-type{display:none}bcp-alert .icon:last-of-type{background-color:#fff;border-radius:50%;cursor:pointer;font-size:.5rem;font-weight:700;height:1rem;padding:.1875rem;position:absolute;right:0;top:.125rem;width:1rem}bcp-alert .icon:first-of-type+p{font-size:14px;margin-right:1rem;text-align:left}bcp-alert .alert-success{background-color:#f1fdda;border:.0625rem solid #93c737}bcp-alert .alert-success .icon.bcp-check-f{background-color:#93c737;border-radius:50%;color:#fff;font-size:.5625rem;top:.1875rem;padding:.21875rem}bcp-alert .alert-success .icon.bcp-x-f{border:.0625rem solid #93c737;color:#93c737;margin-bottom:0}bcp-alert .alert-error{background-color:#ffecf1;border:.0625rem solid #ff003b}bcp-alert .alert-error .icon.bcp-alert-f{color:#ff003b}bcp-alert .alert-error .icon.bcp-x-f{border:.0625rem solid #da2329;color:#da2329}bcp-alert .alert-warning{background-color:#fffcef;border:.0625rem solid #f9de5c}bcp-alert .alert-warning .icon.bcp-info-f{color:#f5cc03}bcp-alert .alert-warning .icon.bcp-x-f{color:#f5cc03;border:.0625rem solid #f5cc03}@-moz-document url-prefix(){bcp-alert .alert-success .icon.bcp-check-f{padding:.28125rem .25rem .0625rem .21875rem}bcp-alert .icon:last-of-type{padding:.1875rem .1875rem .1875rem .16125rem}}_:-ms-fullscreen .alert-success .icon.bcp-check-f,:root bcp-alert .alert-success .icon.bcp-check-f{padding:4.5px 0 0 4px}_:-ms-fullscreen .icon:last-of-type,:root bcp-alert .icon:last-of-type{padding:.2188rem 0 0 .1875rem}_:-ms-fullscreen .alert-error .icon:first-of-type,:root bcp-alert .alert-error .icon:first-of-type{font-size:16px;top:4.5px}_:-ms-fullscreen .alert-error .icon:last-of-type,:root bcp-alert .alert-error .icon:last-of-type{top:3px}@media (min-width:576px){bcp-alert .icon:first-of-type{bottom:0;display:block;height:1rem;left:0;position:absolute;top:.375rem;width:1rem}bcp-alert .icon:first-of-type+p{margin-left:2rem}bcp-alert .icon:last-of-type{margin-bottom:0}bcp-alert .alert-error .icon:first-of-type{font-size:1rem;top:.1875rem}bcp-alert .alert-warning .icon:first-of-type{font-size:.9375rem;top:.1875rem}}@media (max-width:425px){nkolaa-dropdown-redi-tar bcp-dropdown .header-dropdown-content .header-dropdown-body:not(.header-right),nkolaa-dropdown-product bcp-dropdown .header-dropdown-content .header-dropdown-body:not(.header-right){display:block;height:24px}nkolaa-dropdown-redi-tar bcp-dropdown .header-dropdown-content .header-dropdown-body.header-right,nkolaa-dropdown-product bcp-dropdown .header-dropdown-content .header-dropdown-body.header-right{right:unset}}@media (min-width:768px){nkolaa-dropdown-redi-tar bcp-dropdown .header-dropdown-content .header-dropdown-body:not(.header-right),nkolaa-dropdown-product bcp-dropdown .header-dropdown-content .header-dropdown-body:not(.header-right){display:inline}nkolaa-dropdown-redi-tar bcp-dropdown .header-dropdown-content .header-dropdown-body.header-right,nkolaa-dropdown-product bcp-dropdown .header-dropdown-content .header-dropdown-body.header-right{right:41px}}@media (max-width:425px){nkolaa-dropdown-redi-tar bcp-dropdown bcp-dropdown-menu .dropdown-menu.show .text-right.item-dropdown-body,nkolaa-dropdown-product bcp-dropdown bcp-dropdown-menu .dropdown-menu.show .text-right.item-dropdown-body{text-align:left!important}}bs-tooltip-container.tooltip.custom-tooltip.show{opacity:1!important;-webkit-box-shadow:0 8px 16px 0 rgba(23,43,77,.1);box-shadow:0 8px 16px 0 rgba(23,43,77,.1);border-radius:10px;background:#fff;border:1px solid #ededed;z-index:500}bs-tooltip-container.tooltip.custom-tooltip .tooltip-inner{background:#fff;color:#282828;max-height:200px;max-width:240px;font-size:13px}bs-tooltip-container.tooltip.custom-tooltip.bs-tooltip-top .arrow::before{border-width:10px;border-top-color:#fff;margin-left:-5px;margin-top:5px}bs-tooltip-container.tooltip.custom-tooltip.bs-tooltip-top{margin-bottom:10px}.loader{z-index:1999;position:fixed;top:0;left:0;right:0;bottom:0;background-color:rgba(2,47,145,.842)}img.bcp-loader{width:150px;height:38px;position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;z-index:2000}.icon-container{width:150px;height:38px;position:absolute;top:110px;left:0;right:0;bottom:0;margin:auto;z-index:2000}.icon-container div{height:20px;width:20px;position:relative;border-radius:50%;background:#fff;display:inline-block;text-align:center;margin-left:10px}.icon-container div:first-child{-webkit-animation:.6s ease-in-out infinite alternate move;animation:.6s ease-in-out infinite alternate move;margin-left:0}.icon-container div:nth-child(2){-webkit-animation:.6s ease-in-out -.25s infinite alternate move;animation:.6s ease-in-out -.25s infinite alternate move;margin-left:10px}.icon-container div:nth-child(3){-webkit-animation:.6s ease-in-out -.5s infinite alternate move;animation:.6s ease-in-out -.5s infinite alternate move}.icon-container div:nth-child(4){-webkit-animation:.6s ease-in-out -.75s infinite alternate move;animation:.6s ease-in-out -.75s infinite alternate move}@-webkit-keyframes move{0%{-webkit-transform:translateY(-10px);transform:translateY(-10px)}100%{-webkit-transform:translateY(5px);transform:translateY(5px)}}@keyframes move{0%{-webkit-transform:translateY(-10px);transform:translateY(-10px)}100%{-webkit-transform:translateY(5px);transform:translateY(5px)}}
  </style>
<style type="text/css">
  [_nghost-c17]{ display: block; width: 100%; }

.captcha-border[_ngcontent-c12] {
    height: 44px;
    border-radius: 6px;
    border: solid 1px #efefef;
    background-color: #f8f8fa; }
    .password {
    color: #012d74;
    font-family: Flexo;
    font-size: 14px;
    font-stretch: normal;
    font-style: normal;
    font-weight: bold;
    height: 24px;
    letter-spacing: normal;
    line-height: 1.71;
    position: relative;
    width: 193px; }
    .password .six-digit-password {
      display: inline-block;
      margin-bottom: 0; }
    .password .six-digit-password-icon {
        color: #ff7800;
        cursor: pointer;
        display: inline-block;
        margin-left: 4px; }
    .see-more-link {
    color: #2cc0d5;
    display: block;
    font-family: Flexo;
    font-size: 12px;
    font-stretch: normal;
    font-style: normal;
    font-weight: bold;
    height: 22px;
    letter-spacing: normal;
    line-height: 1.33;
    margin-top: 5px;
    -webkit-text-decoration-line: underline;
            text-decoration-line: underline;
    width: 50px; }
    .see-more-link:hover {
      color: #2cc0d5;
      cursor: pointer; }
  .container-keypad[_ngcontent-c9]   p[_ngcontent-c9] {
    -webkit-transform: rotate(-360deg);
            transform: rotate(-360deg);
    font-family: Flexo;
    font-size: 16px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.5;
    letter-spacing: normal;
    color: #012d74;
    height: auto; }
  
  .center[_ngcontent-c9] {
    text-align: center; }
  
  .left[_ngcontent-c9] {
    text-align: left; }
  
  .center[_ngcontent-c9] {
    text-align: center; }
  
  .left[_ngcontent-c9] {
    text-align: left; }
  
  .right[_ngcontent-c9] {
    text-align: right; }
  
  div[keypadMark][_ngcontent-c9] {
    margin: 0 !important; }
  
  @media (max-width: 769px) {
    .seed-desktop[_ngcontent-c9] {
      display: none !important; }
    .seed-mobile[_ngcontent-c9] {
      display: block !important; } }
  
  @media (min-width: 770px) {
    .seed-mobile[_ngcontent-c9] {
      display: none !important; }
    .seed-desktop[_ngcontent-c9] {
      display: block !important; } }
  
  @media (min-width: 1025px) and (max-width: 1275px) {
    .clean-button[_ngcontent-c9] {
      width: 38px;
      height: 38px; } }
      .container-mark[_ngcontent-c18] {
    height: 25px;
    border-bottom: 1px solid;
    border-color: #7194BD; }
  
  .mark-lock-icon[_ngcontent-c18] {
    color: #002D87;
    margin-right: 16px;
    margin-bottom: 12px; }
  
  .line-error[_ngcontent-c18] {
    border-color: #ff003b; }
  
  .center[_ngcontent-c18] {
    text-align: center; }
  
  .left[_ngcontent-c18] {
    text-align: left; }
  
  .right[_ngcontent-c18] {
    text-align: right; }
  
  .mark--inactive[_ngcontent-c18] {
    background-color: #F1F1F1;
    display: inline-block;
    border-radius: 50px;
    height: 10px;
    width: 10px;
    margin-right: 17px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    border: 1px solid #A8A8A8;
    margin-bottom: 4px; }
  
  .mark--inactive-error[_ngcontent-c18] {
      border: 1px solid #ff003b;
      background-color: #FFFFFF; }
  
  .mark--active[_ngcontent-c18] {
    background-color: #002d74;
    display: inline-block;
    border-radius: 50px;
    height: 10px;
    width: 10px;
    margin-right: 17px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    border: 1px solid #A8A8A8;
    margin-bottom: 4px; }
  
  .center[_ngcontent-c18] {
    text-align: center; }
  
  .left[_ngcontent-c18] {
    text-align: left; }
  
  .right[_ngcontent-c18] {
    text-align: right; }
    div.keypad-seed-container[_ngcontent-c20] {
    margin-top: 10px; }
  
  .seed-enabled[_ngcontent-c20] {
    border-radius: 5px;
    border: 1px solid;
    border-color: #e2e2e2;
    position: inherit; }
  
  .seed-enabled[_ngcontent-c20]:hover {
      cursor: pointer; }
  
  .seed-enabled[_ngcontent-c20]:active {
      opacity: .1; }
  
  .separator[_ngcontent-c20] {
    margin-bottom: 5px; }
  
  div.right[_ngcontent-c20] {
    text-align: right; }
  
  div.center[_ngcontent-c20] {
    text-align: center; }
  
  div.left[_ngcontent-c20] {
    text-align: left; }
  
  @media (min-width: 1025px) and (max-width: 1275px) {
    .seed-enabled[_ngcontent-c20] {
      width: 38px;
      height: 38px; } }
      .seed-disabled[_ngcontent-c21] {
    opacity: .4; }
  
  .seed-enabled[_ngcontent-c21] {
    border-radius: 5px;
    width: 46px;
    height: 46px;
    margin: 10px; }
  
  .seed-enabled[_ngcontent-c21]:hover {
      cursor: pointer; }
  
  .seed-enabled[_ngcontent-c21]:active {
      opacity: .1; }
  
  .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21] {
    text-align: center; }
  
  .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21] {
      display: inline-block;
      margin-bottom: 1px;
      margin-right: 3px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      cursor: pointer; }
  
  @media (max-width: 768) {
        .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21] {
          display: inherit;
          float: left !important;
          margin-bottom: 0 !important;
          margin-right: 0 !important;
          width: 25%;
          height: 70px;
          margin-right: -3px;
          vertical-align: top;
          outline: thin solid rgba(215, 215, 215, 0.9);
          background-color: #f4f4f4; } }
  
  @media (max-width: 768) {
        .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img[_ngcontent-c21] {
          width: 60px;
          height: 60px; } }
  
  .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img[_ngcontent-c21]:hover {
        cursor: pointer; }
  
  @media (max-width: 768) {
        .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img.action[_ngcontent-c21] {
          margin-left: 0 !important; } }
  
  .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21] {
      margin-bottom: 1px;
      margin-right: 3px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      cursor: pointer; }
  
  @media (max-width: 768) {
        .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21] {
          display: inherit;
          float: left !important;
          margin-bottom: 0 !important;
          margin-right: 0 !important;
          width: 25%;
          height: 70px;
          margin-right: -3px;
          vertical-align: top;
          outline: thin solid rgba(215, 215, 215, 0.9); } }
  
  @media (max-width: 768) {
        .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img[_ngcontent-c21] {
          width: 60px;
          height: 60px; } }
  
  .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img[_ngcontent-c21]:hover {
        cursor: pointer; }
  
  @media (max-width: 768) {
        .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img.action[_ngcontent-c21] {
          margin-left: 0 !important; } }
  
  @media (max-width: 768) {
    .keypad-container[_ngcontent-c21] {
      width: 100%;
      background-color: #f4f4f4; } }
  
  .keypad-container[_ngcontent-c21], .keypad-container[_ngcontent-c21], .keypad-container[_ngcontent-c21] {
    width: 100%;
    -webkit-box-sizing: border-box;
    box-sizing: border-box; }
  
  .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21] {
    text-align: center; }
  
  .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21] {
    display: inline-block;
    margin-bottom: 1px;
    margin-right: 3px; }
  
  .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21] {
    display: inline-block;
    margin-bottom: 1px;
    margin-right: 3px; }
  
  @media (max-width: 768px) {
    .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21] {
      display: inherit;
      float: left !important;
      margin-bottom: 0 !important;
      margin-right: 0 !important;
      width: 25%;
      height: 70px;
      vertical-align: top;
      outline: thin solid rgba(215, 215, 215, 0.9);
      background-color: #f4f4f4; } }
  
  @media (max-width: 768px) {
    .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21] {
      display: inherit;
      float: left !important;
      margin-bottom: 0 !important;
      margin-right: 0 !important;
      width: 25%;
      height: 70px;
      vertical-align: top;
      outline: thin solid rgba(215, 215, 215, 0.9);
      background-color: #f4f4f4; } }
  
  .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img[_ngcontent-c21] {
    border-radius: 5px;
    width: 38px;
    height: 38px; }
  
  .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img[_ngcontent-c21] {
    border-radius: 5px;
    width: 38px;
    height: 38px; }
  
  @media (max-width: 768px) {
    .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img[_ngcontent-c21] {
      width: 60px;
      height: 60px; } }
  
  .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img[_ngcontent-c21]:hover, .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img[_ngcontent-c21]:hover, .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img[_ngcontent-c21]:hover {
    cursor: pointer; }
  
  @media (max-width: 768px) {
    .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img[_ngcontent-c21] {
      width: 60px;
      height: 60px; } }
  
  .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img[_ngcontent-c21]:hover, .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img[_ngcontent-c21]:hover, .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img[_ngcontent-c21]:hover {
    cursor: pointer; }
  
  @media (max-width: 768px) {
    .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img.action[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img.action[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit[_ngcontent-c21]   img.action[_ngcontent-c21] {
      margin-left: 0 !important; } }
  
  @media (max-width: 768px) {
    .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img.action[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img.action[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21]   .keypad-digit-d[_ngcontent-c21]   img.action[_ngcontent-c21] {
      margin-left: 0 !important; } }
  
  @media (max-width: 768px) {
    .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21], .keypad-container[_ngcontent-c21]   .keypad-numbers[_ngcontent-c21] {
      margin-left: 8px !important;
      margin-right: 8px !important; } }
  
  @media (max-width: 768px) {
    .keypad-container[_ngcontent-c21], .keypad-container[_ngcontent-c21], .keypad-container[_ngcontent-c21] {
      width: 100%; } }
  
  .point-key[_ngcontent-c21] {
    width: 1px;
    height: 1px;
    background-color: #012d74;
    position: absolute;
    pointer-events: none; }
  
  .text-3[_ngcontent-c21] {
    font-family: Flexo;
    font-size: 12px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.33;
    letter-spacing: normal;
    color: #ff7800;
    text-decoration: underline;
    float: right;
    cursor: pointer;
    margin-right: 10px; }
  
  .text-4[_ngcontent-c21] {
    font-family: Flexo;
    font-size: 12px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.33;
    letter-spacing: normal;
    color: #ff7800;
    text-decoration: underline;
    margin-bottom: 40px;
    cursor: pointer;
    margin-left: 10px; }





















    .loader[_ngcontent-c1] {
        z-index: 1999;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(2, 47, 145, 0.842); }
      
      img.bcp-loader[_ngcontent-c1] {
        width: 150px;
        height: 38px;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        z-index: 2000; }
      
      .icon-container[_ngcontent-c1] {
        width: 150px;
        height: 38px;
        position: absolute;
        top: 110px;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        z-index: 2000; }
      
      .icon-container[_ngcontent-c1]   div[_ngcontent-c1] {
          height: 20px;
          width: 20px;
          position: relative;
          border-radius: 50%;
          background: #fff;
          display: inline-block;
          text-align: center;
          margin-left: 10px; }
      
      .icon-container[_ngcontent-c1]   div[_ngcontent-c1]:first-child {
          -webkit-animation: move 0.6s ease-in-out infinite alternate;
                  animation: move 0.6s ease-in-out infinite alternate;
          margin-left: 0; }
      
      .icon-container[_ngcontent-c1]   div[_ngcontent-c1]:nth-child(2) {
          -webkit-animation: move 0.6s ease-in-out -0.25s infinite alternate;
                  animation: move 0.6s ease-in-out -0.25s infinite alternate;
          margin-left: 10px; }
      
      .icon-container[_ngcontent-c1]   div[_ngcontent-c1]:nth-child(3) {
          -webkit-animation: move 0.6s ease-in-out -0.5s infinite alternate;
                  animation: move 0.6s ease-in-out -0.5s infinite alternate; }
      
      .icon-container[_ngcontent-c1]   div[_ngcontent-c1]:nth-child(4) {
          -webkit-animation: move 0.6s ease-in-out -0.75s infinite alternate;
                  animation: move 0.6s ease-in-out -0.75s infinite alternate; }
      
      @-webkit-keyframes move {
        0% {
          -webkit-transform: translateY(-10px);
                  transform: translateY(-10px); }
        100% {
          -webkit-transform: translateY(5px);
                  transform: translateY(5px); } }
      
      @keyframes move {
        0% {
          -webkit-transform: translateY(-10px);
                  transform: translateY(-10px); }
        100% {
          -webkit-transform: translateY(5px);
                  transform: translateY(5px); } }
                  #wrapper-login {
        position: relative; }
      
      .timer-out-overlay {
        z-index: 300; }
      
      .tablagen {
        display: table; }
      
      .tablagen .fila {
        display: table-row-group;
        width: 100%;
        height: 100vh; }
      
      .tablagen .fila .columna {
        display: table-cell; }
      
      .full-width {
        width: 100%; }
      
      .full-height {
        height: 100vh; }
      
      .login-img {
        width: 59%;
        background-image: url("https://colita.colita.com/assets/img/kolaa-login-fondo.jpg");
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center; }
      
      #login-background-container {
        min-height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0px;
        width: 100%; }
      
      #login-background-container1 {
        position: relative; }
      
      #login-background-container1 .container-fluid {
          padding-left: 0px;
          padding-right: 0px; }
      
      #login-header {
        -webkit-box-sizing: border-box;
        background-color: #002D87;
        box-sizing: border-box;
        margin-right: 0px;
        margin-left: 0px;
        height: 60px;
        min-height: 64px;
        padding: 16px;
        width: 100%; }
      
      #login-header .login-header-logo {
          width: 100px; }
      
      #login-header .login-header-counter {
          padding-top: 7px; }
      
      #login-form-container {
        margin-bottom: 134px;
        padding: 15px;
        width: 100%; }
      
      #login-form-container .row-bcp-alert-mt {
          margin-top: 8px; }
      
      #login-form-container .row-bcp-alert .alert-error-login > .alert-error {
          height: auto;
          margin-right: 15px;
          position: absolute;
          top: -13px;
          width: auto;
          z-index: 100; }
      
      #login-form-container .row-title .title-container {
          padding-left: 32px;
          padding-right: 32px; }
      
      #login-form-container .row-title .title-container-h1 {
            color: #002D87;
            font-family: Flexo;
            font-size: 24px;
            font-stretch: normal;
            font-style: normal;
            letter-spacing: normal;
            line-height: 1.33; }
      
      #login-form-container .row-alias {
          margin-top: 0px; }
      
      #login-form-container .row-keypad {
          margin-top: 32px; }
      
      #login-form-container .row-keypad .container-mark {
            margin-top: 14px; }
      
      #login-form-container .create-forgotten-key {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-pack: center;
              -ms-flex-pack: center;
                  justify-content: center; }
      
      #login-form-container .create-forgotten-key .separation-line {
            color: #e2e2e2;
            padding: 0 5px; }
      
      #login-form-container .create-forgotten-key .create-password,
          #login-form-container .create-forgotten-key .forgotten-password {
            font-weight: bold;
            color: #ff7800;
            font-size: 12px;
            letter-spacing: 0.3px;
            line-height: 1.5;
            text-decoration: underline; }
      
      #login-form-container .create-forgotten-key .create-password:hover,
            #login-form-container .create-forgotten-key .forgotten-password:hover {
              cursor: pointer; }
      
      #login-form-container .row-captcha {
          margin-top: 30px; }
      
      #login-form-container .row-captcha .captcha-container .captcha-title {
            color: #002D87;
            font-size: 14px;
            font-stretch: normal;
            font-style: normal;
            letter-spacing: normal; }
      
      #login-form-container .row-captcha .captcha-container .captcha-input-row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
                -ms-flex-direction: row;
                    flex-direction: row;
            padding-left: 15px; }
      
      #login-form-container .row-captcha .captcha-container .captcha-input-row .captcha-input-row-field {
              margin-left: 8px; }
      
      #login-form-container .row-captcha .captcha-container .refresh-catpcha-link {
            color: #ff7800;
            font-size: 12px;
            font-stretch: normal;
            font-style: normal;
            font-weight: bold;
            letter-spacing: 0.3px;
            line-height: 1.33; }
      
      #login-form-container .row-captcha .captcha-container .refresh-catpcha-link:hover {
              cursor: pointer; }
      
      #login-form-container .row-captcha .captcha-container .captcha-input::-webkit-input-placeholder {
            color: #a8a8a8;
            font-size: 16px;
            font-stretch: normal;
            font-style: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 2; }
      
      #login-form-container .row-captcha .captcha-container .captcha-input::-moz-placeholder {
            color: #a8a8a8;
            font-size: 16px;
            font-stretch: normal;
            font-style: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 2; }
      
      #login-form-container .row-captcha .captcha-container .captcha-input::-ms-input-placeholder {
            color: #a8a8a8;
            font-size: 16px;
            font-stretch: normal;
            font-style: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 2; }
      
      #login-form-container .row-captcha .captcha-container .captcha-input::placeholder {
            color: #a8a8a8;
            font-size: 16px;
            font-stretch: normal;
            font-style: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 2; }
      
      #login-form-container .row-login-button {
          margin-top: 47px;
          margin-bottom: 40px; }
      
      #login-form-container .row-login-button .login-button-container {
            padding-left: 32px;
            padding-right: 32px; }
      
      #login-form-container .genkey-button-container {
          margin-top: 24px;
          padding-left: 32px;
          padding-right: 32px; }
      
      #login-footer {
        background-color: transparent;
        bottom: 0px;
        height: 80px;
        left: 0px;
        padding-left: 16px;
        padding-right: 16px;
        position: absolute;
        width: 100%;
        pointer-events: none; }
      
      #login-footer .footer-text-container .footer-text {
          color: #6c7481;
          font-size: 12px;
          font-stretch: normal;
          font-style: normal;
          font-weight: normal;
          letter-spacing: normal;
          line-height: 2;
          margin-bottom: 0px; }
      
      #login-footer .footer-text-container .footer-text:nth-child(2) {
            display: none; }
      
      #login-footer .footer-logo-container .footer-logo {
          height: 17px;
          width: 68px; }
      
      nkolaa-confirmation-modal nkolaa-modal-body .modal-body {
        padding: 0px 16px !important; }
      
      nkolaa-confirmation-modal nkolaa-modal-body .body p {
        text-align: center; }
      
      div[keypadSeed] {
        margin-top: 5px; }
      
      @media (min-width: 768px) {
        #login-form-container {
          margin-bottom: 60px; }
          #login-form-container .row-bcp-alert .alert-error-login > .alert-error {
            left: 16%;
            margin-right: 0px;
            top: -10px; }
            #login-form-container .row-bcp-alert .alert-error-login > .alert-error .icon:first-of-type + p {
              margin-right: 24px; }
          #login-form-container .row-title .title-container {
            padding-left: 16px;
            padding-right: 16px; }
          #login-form-container .row-tar-number .tar-number-component {
            padding-left: 16px;
            padding-right: 16px; }
          #login-form-container .row-alias .alias-container {
            padding-left: 16px;
            padding-right: 16px; }
          #login-form-container .row-keypad nkolaa-bcp-digit-popover div.password {
            padding-left: 0px; }
          #login-form-container .row-keypad .container-mark {
            margin-top: 32px; }
          #login-form-container .create-forgotten-key .separation-line {
            padding: 0 10px; }
          #login-form-container .row-captcha .captcha-container {
            padding-left: 16px;
            padding-right: 16px; }
          #login-form-container .row-login-button {
            margin-top: 48px; }
            #login-form-container .row-login-button .login-button-container {
              padding-left: 16px;
              padding-right: 16px; }
          #login-form-container .genkey-button-container {
            margin-top: 24px;
            padding-left: 16px;
            padding-right: 16px; }
        #login-footer {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          height: 32px;
          -webkit-box-pack: justify;
              -ms-flex-pack: justify;
                  justify-content: space-between;
          padding-left: 16px;
          padding-right: 16px;
          position: initial; }
          #login-footer .footer-text-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
                -ms-flex-pack: center;
                    justify-content: center; }
            #login-footer .footer-text-container .footer-text {
              margin-right: 13px; }
              #login-footer .footer-text-container .footer-text:nth-child(2) {
                display: inline-block; } }
      
      @media (min-width: 1024px) {
        .container-cobrowse {
          padding-top: 40px; }
        #login-header {
          position: absolute; }
        #login-form-container {
          margin-bottom: 134px;
          padding: 72px 0px 0px; }
          #login-form-container .row-bcp-alert .alert-error-login > .alert-error {
            left: 0%;
            margin: 0px 6%;
            width: 600px; }
          #login-form-container .row-title {
            margin-top: 56px; }
          #login-form-container .row-alias {
            margin-top: 0px; }
          #login-form-container .row-keypad {
            margin-top: 32px; }
            #login-form-container .row-keypad .container-mark {
              margin-top: 23px; }
          #login-form-container .create-forgotten-key {
            -webkit-box-pack: start;
                -ms-flex-pack: start;
                    justify-content: start;
            padding-left: 2.5rem; }
          #login-form-container .row-login-button {
            margin-top: 28px; }
        .login-img {
          display: table-cell; } }
      
      @media (min-width: 1220px) {
        #login-background-container {
          background-color: transparent;
         
          background-position: right, left center;
          background-repeat: repeat-y, no-repeat;
          background-size: 40%, auto;
          min-height: 100%;
          overflow: hidden;
          position: absolute;
          top: 0px;
          width: 100%; }
        #login-header {
          background-color: transparent;
          height: 60px;
          position: absolute;
          width: 100%;
          z-index: 1; }
          #login-header .login-header-counter {
            padding-top: 0px; }
        #login-form-container {
          padding: 45px 0px;
          width: 41%; }
          #login-form-container .row-bcp-alert .alert-error-login > .alert-error {
            left: 0%;
            margin: 0px;
            top: -42px;
            width: 330px;
            padding: 0.800rem; }
          #login-form-container .row-title {
            margin-top: 45px; }
          #login-form-container .row-captcha .captcha-container .captcha-input-row {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
                -ms-flex-direction: row;
                    flex-direction: row; }
            #login-form-container .row-captcha .captcha-container .captcha-input-row .captcha-input-row-image {
              -ms-flex-preferred-size: 40%;
                  flex-basis: 40%; }
            #login-form-container .row-captcha .captcha-container .captcha-input-row .captcha-input-row-field {
              -ms-flex-preferred-size: 60%;
                  flex-basis: 60%; }
        #login-footer {
          background-color: transparent;
          bottom: 0px;
          height: 25px;
          left: 0px;
          position: fixed;
          width: 100%; }
          #login-footer .footer-text-container .footer-text {
            color: #6c7481; }
          #login-footer .footer-logo-container .footer-logo {
            display: none; } }
      
      @media (min-width: 1360px) {
        #login-form-container .row-bcp-alert .alert-error-login > .alert-error {
          left: 0%;
          width: 338px; } }
      
      @media (min-width: 1440px) {
        #login-form-container .row-bcp-alert .alert-error-login > .alert-error {
          left: 0%;
          width: 366px; } }
      
      @media (max-width: 1024px) {
        .row-login-button .login-button-container {
          margin-bottom: 40px; }
        .container-cobrowse {
          padding-top: 0px; }
        .login-img {
          display: none !important; }
        #login-footer {
          position: initial; } }
      
      .genkey-button-container {
        margin-top: 24px; }
      
      .captcha-label-message {
        font-family: Flexo;
        font-size: 14px;
        font-weight: bold;
        font-style: normal;
        font-stretch: normal;
        line-height: 1.71;
        letter-spacing: normal;
        color: #002D87;
        margin-left: 16px; }
      
      .chatvisor-info {
        padding: 3px;
        margin-bottom: 1px; }
      
      button.btn-cobrowse.stop {
        position: fixed;
        color: #fff;
        background-color: #3d77ff;
        border-color: #3d77ff;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        border-style: solid;
        text-align: center;
        cursor: pointer;
        top: 0;
        height: 39px;
        width: 100%;
        z-index: 10; }
      
      .container-cobrowse {
        width: 100%;
        text-align: center;
        position: relative;
        margin-top: 40px;
        bottom: 70px;
        display: inline-block;
         }
      
      @media (max-width: 767px) and (min-width: 426px) {
        .row-login-button .login-button-container {
          margin-bottom: 40px; }
        .container-cobrowse {
          padding-top: 0px;
          bottom: 50px;
          margin-top: 0px; }
        .home-container {
          margin-bottom: 100px; }
        .text-cobrowse.start {
          padding-top: 15px; } }
      
      @media (max-width: 425px) {
        .row-login-button .login-button-container {
          margin-bottom: 40px; }
        .container-cobrowse {
          padding-top: 0px;
          bottom: 50px;
          margin-top: 0px; }
        .text-cobrowse.start {
          padding-top: 30px; } }
      
      span.text-cobrowse.stop {
        display: block;
        position: relative;
        white-space: nowrap;
        padding: 0; }
      
      button.btn-cobrowse img.ic-cobrowse {
        display: block;
        position: absolute;
        bottom: 4px; }
      
      span.text-cobrowse.start {
        display: block;
        position: relative;
        color: gray;
        text-align: center;
        cursor: pointer; }
      
      .CV-cobrowsing-main .CV-tooltip-main {
        display: none; }
      
      .tabs-bar {
        background-color: #E9EBEF;
        border: none;
        height: 1px;
        margin: 0px 0px 0px 0px; }
      
      .configuration-tool-container, .see-more-terms-container {
        color: #6C7481; }
      
      .configuration-tool-container:hover, .see-more-terms-container:hover {
          cursor: pointer; }
      
      .configuration-tool-container:hover .configuration-tool-text, .see-more-terms-container:hover .configuration-tool-text, .configuration-tool-container:hover .see-more-terms-text, .see-more-terms-container:hover .see-more-terms-text,
          .configuration-tool-container:hover .terms-configuration-icon,
          .see-more-terms-container:hover .terms-configuration-icon,
          .configuration-tool-container:hover .see-more-terms-icon,
          .see-more-terms-container:hover .see-more-terms-icon {
            color: #202E44; }
      
      .configuration-tool-text, .see-more-terms-text {
        font-family: Flexo-Demi;
        font-size: 14px;
        line-height: 1.43;
        margin-bottom: 0px;
        margin-right: 11px;
        margin-top: 6px; }
      
      .terms-configuration-icon, .see-more-terms-icon {
        color: #6C7481;
        font-size: 18px;
        font-weight: normal;
        height: 18px;
        margin-top: 6px;
        width: 18px; }
      
      .see-more-terms-icon {
        font-size: 12px;
        height: 10.5px;
        margin-top: 8px;
        width: 17.9px;
        padding-right: 3px; }
      
      .see-more-terms-icon::before {
          font-family: "icons";
          content: "\f103"; }
      
      .more-terms-tabs-container {
        margin-top: 12px;
        height: 169px;
        overflow-y: scroll;
        padding-right: 16px;
         }
      
      .terms-container {
        padding-right: 8px;
        padding-left: 8px; }
      
      .terms-title-col, .configuration-tool-container, .see-more-terms-container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
            -ms-flex-pack: justify;
                justify-content: space-between;
        height: 56px;
        padding-top: 8px; }
      
      .d-checkbox-top-step3 {
        margin-top: 1rem; }
      
      .custom-control-indicator {
        border-color: #BFC4CC;
        width: 16px;
        height: 16px;
        min-height: 16px;
        min-width: 16px;
        font-size: 12px; }
      
      .custom-terms-checkbox {
        padding-left: 15px; }
      
      .custom-control-input:checked ~ .custom-control-indicator {
        background-color: #ff7800 !important;
        border-color: #ff7800; }
      
      .custom-control-input:active ~ .custom-control-indicator {
        background-color: #ff7800 !important;
        border-color: #ff7800; }
      
      .modal-body-text {
        color: #202e44;
        font-size: 14px;
        text-align: left; }
      
      .terms-header {
        color: #202e44;
        font-size: 14px;
        font-family: Flexo-Demi; }
      
      #terms-body {
        font-size: 14px;
        color: #202e44;
        text-align: left; }
      
      .icon-rotate {
        -webkit-transform: rotate(-180deg) !important;
                transform: rotate(-180deg) !important; }
      
      .terms-confirm-text {
        font-size: 14px;
        margin-top: 1px; }
      
      .terms-config-container {
        padding-top: 15px;
        padding-bottom: 10px; }
      
      .terms-confirm-footer {
        border-top: solid #E9EBEF 1px; }
      
      .modal-button-text {
        font-family: Flexo-Demi;
        font-weight: normal;
        font-size: 14px; }
      
      .stop-buttons-container {
        background-color: #f2f4f8 !important;
        margin-top: 10px; }
      
      @media (max-width: 575px) {
        .stop-buttons-container {
          width: 290px; } }
      
      .stop-cobrowsing-button {
        width: 90px !important;
        margin-right: 5px;
        margin-left: 5px; }
      
      .cancel-stop-cobrowsing {
        background-color: white;
        color: #202e44;
        border-color: #acb2bd;
        width: 90px !important; }
      
      .error-cobrowsing-button {
        width: 101px !important;
        margin-right: 5px;
        margin-left: 5px; }
      
      .cancel-error-cobrowsing {
        background-color: white;
        color: #202e44;
        border-color: #acb2bd;
        width: 101px !important; }
      
      .cancel-stop-cobrowsing:active {
        background-color: #ff9333;
        color: white;
        border-color: #ff9333; }
      
      .cancel-stop-cobrowsing:hover {
        background-color: #ff9333;
        color: white;
        border-color: #ff9333; }
      
      .button-cobrowse-start {
        width: 135px !important; }
      
      .cobrowse-info-icon {
        margin-bottom: 2px;
        margin-left: 3px; }
      [_nghost-c15]{ display: block; width: 100%; }
      .timer-mobile[_ngcontent-c4] {
        color: #fff;
        display: block; }
      
      .timer[_ngcontent-c4] {
        display: none; }
      
      .timer-tablet[_ngcontent-c4] {
        display: none; }
      
      @media (min-width: 577px) {
        .timer-mobile[_ngcontent-c4] {
          display: none; }
        .timer-tablet[_ngcontent-c4] {
          display: block;
          color: #fff; }
        .timer[_ngcontent-c4] {
          display: none; } }
      
      @media (min-width: 1220px) {
        .timer-mobile[_ngcontent-c4] {
          display: none; }
        .timer-tablet[_ngcontent-c4] {
          display: none; }
        .timer[_ngcontent-c4] {
          display: block;
          color: #000; } }
          .show-no-disable[_ngcontent-c6]:disabled {
        border-color: inherit;
        color: inherit; }
      
      .register-tar[_ngcontent-c6] {
        height: 116px; }
      
      .register-tar[_ngcontent-c6]   .dropdown-toggle-header[_ngcontent-c6]   .nickname-label[_ngcontent-c6] {
          color: #282828;
          font-family: Flexo;
          font-size: 16px;
          font-stretch: normal;
          font-style: normal;
          font-weight: normal;
          letter-spacing: normal;
          line-height: inherit;
          margin-bottom: 0px;
          margin-top: inherit; }
      
      .register-tar[_ngcontent-c6]   .dropdown-toggle-header[_ngcontent-c6]   .tar-number-label[_ngcontent-c6] {
          color: #012d74;
          font-size: 14px;
          font-stretch: normal;
          font-style: normal;
          font-weight: bold;
          letter-spacing: normal;
          line-height: 1.14; }
      
      .register-tar[_ngcontent-c6]   .dropdown-toggle-header[_ngcontent-c6]   .tar-number-label-mt[_ngcontent-c6] {
            color: #012d74;
            font-family: Flexo;
            font-size: 14px;
            font-stretch: normal;
            font-style: normal;
            font-weight: bold;
            letter-spacing: normal;
            line-height: 1.14;
            top: -16px; }
      
      .register-tar[_ngcontent-c6]   .dropdown-toggle-header[_ngcontent-c6]   .number-tar[_ngcontent-c6] {
          line-height: inherit;
          padding: 0 0 5px 0;
          -webkit-user-select: text; }
      
      .register-tar[_ngcontent-c6]   .dropdown-toggle-header[_ngcontent-c6]   .input-icon-tar[_ngcontent-c6] {
          margin-top: 28px;
          position: absolute;
          color: #012d74; }
      
      .register-tar[_ngcontent-c6]   .dropdown-toggle-header[_ngcontent-c6]   .tar-number-input[_ngcontent-c6] {
          font-size: 16px;
          padding-left: 0px; }
      
      .register-tar[_ngcontent-c6]   .dropdown-toggle-header[_ngcontent-c6]   .tar-number-input-margin[_ngcontent-c6] {
            font-size: 16px;
            padding: 0 0 0 28px; }
      
      .register-tar[_ngcontent-c6]   .dropdown-toggle-header[_ngcontent-c6]   .tar-number-input[_ngcontent-c6]:hover {
            cursor: pointer; }
      
      .register-tar[_ngcontent-c6]   .dropdown-toggle-header[_ngcontent-c6]   .toggle-icon-container[_ngcontent-c6] {
          bottom: 14px;
          position: absolute;
          right: 1px; }
      
      .register-tar[_ngcontent-c6]   .dropdown-toggle-header[_ngcontent-c6]   .toggle-icon-container[_ngcontent-c6]::after {
            color: #ff7800;
            content: "\f103";
            font-family: "icons"; }
      
      .register-tar[_ngcontent-c6]   .dropdown-toggle-header[_ngcontent-c6]   .toggle-icon-container[_ngcontent-c6]:hover {
            cursor: pointer; }
      
      .register-tar[_ngcontent-c6]   .dropdown-toggle-header[_ngcontent-c6]   .toggle-icon-container-toggle[_ngcontent-c6] {
          bottom: 14px;
          position: absolute;
          right: 1px; }
      
      .register-tar[_ngcontent-c6]   .dropdown-toggle-header[_ngcontent-c6]   .toggle-icon-container-toggle[_ngcontent-c6]::after {
            color: #ff7800;
            content: "\f106";
            font-family: "icons"; }
      
      .register-tar[_ngcontent-c6]   .form-control.number-tar.show-no-disable.tar-input-border[_ngcontent-c6] {
          border-bottom: 1px solid #7194BD; }
      
      .register-tar[_ngcontent-c6]   .form-control.number-tar.show-no-disable.tar-input-border.is-invalid[_ngcontent-c6] {
          border-bottom: 1px solid  #ff003b; }
      
      .register-tar.shadow[_ngcontent-c6] {
          -webkit-box-shadow: #d6dce9 0px 7px 15px 1px;
                  box-shadow: #d6dce9 0px 7px 15px 1px; }
      
      .register-tar[_ngcontent-c6]   .dropdown-menu[_ngcontent-c6] {
          border-bottom: 8px;
          border-left: 0px;
          border-right: 8px;
          border-top: 8px; }
      
      .register-tar[_ngcontent-c6]   .dropdown-menu[_ngcontent-c6]   .dropdown-item[_ngcontent-c6] {
            margin-right: 0px;
            padding-left: 16px; }
      
      .register-tar[_ngcontent-c6]   .dropdown-menu[_ngcontent-c6]   .dropdown-item[_ngcontent-c6]   .nickname-label[_ngcontent-c6], .register-tar[_ngcontent-c6]   .dropdown-menu[_ngcontent-c6]   .dropdown-item[_ngcontent-c6]   .number-tar[_ngcontent-c6] {
              margin-bottom: 0px; }
      
      .register-tar[_ngcontent-c6]   .dropdown-menu[_ngcontent-c6]   .dropdown-item[_ngcontent-c6]   .nickname-label[_ngcontent-c6] {
              color: #282828;
              font-family: Flexo;
              font-size: 16px;
              font-stretch: normal;
              font-style: normal;
              font-weight: normal;
              letter-spacing: normal;
              line-height: 1;
              margin-bottom: 0px;
              margin-top: inherit; }
      
      .register-tar[_ngcontent-c6]   .dropdown-menu[_ngcontent-c6]   .dropdown-item[_ngcontent-c6]:hover {
              border-radius: 0px; }
      
      .register-tar[_ngcontent-c6]   .options[_ngcontent-c6]   .enter-other-tar-link[_ngcontent-c6] {
          color: #ff7800;
          font-family: Flexo;
          font-size: 14px;
          font-stretch: normal;
          font-style: normal;
          font-weight: bold;
          letter-spacing: normal;
          line-height: 1.14;
          margin-bottom: 18px;
          margin-left: 16px;
          margin-top: 21px; }
      
      .register-tar[_ngcontent-c6]   .options[_ngcontent-c6]   .enter-other-tar-link-icon[_ngcontent-c6] {
            font-size: 15px;
            height: 16px;
            margin-right: 8px;
            padding-top: 4px;
            width: 16px; }
      
      .register-tar[_ngcontent-c6]   .options[_ngcontent-c6]   .enter-other-tar-link[_ngcontent-c6]:hover {
            cursor: pointer; }
      
      .register-tar[_ngcontent-c6]   .options.mm[_ngcontent-c6] {
          margin-top: -50px; }
      
      .register-tar[_ngcontent-c6]   .options[_ngcontent-c6]   .bottom-space-box[_ngcontent-c6] {
          padding-bottom: 4px; }
          [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content {
        width: 100%;
        height: 500px; }
        [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .modal-body {
          padding: 0 30px; }
        [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .body-content {
          max-height: 380px !important; }
        [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .body-content .information-text {
            margin-top: 16px;
            text-align: justify;
            margin-bottom: 16px; }
        [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .body-content .content-bcp-alert {
            margin-top: 10px; }
        [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .body-content .content-bcp-alert p {
              font-size: 13px;
              text-align: justify; }
        [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .body-content .challenge-textbox {
            margin-top: 16px;
            margin-left: 0px;
            margin-right: 0px; }
        [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .body-content .challenge-textbox label {
              text-align: left; }
        [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .button-group {
          padding: 0 32px; }
        [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .btn-cancel {
          width: 100%; }
        [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .btn-valid {
          width: 100%;
          margin-bottom: 10px; }
        @media (min-width: 375px) {
        [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .modal-body {
          padding: 0 32px; }
        [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .body-content .information-text {
          margin-bottom: 24px; }
        [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .body-content .content-bcp-alert p {
          font-size: 14px; } }
        @media (min-width: 768px) {
        [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content {
          width: 448px;
          height: 390px; }
          [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .body-title .mt-15 {
            margin-top: 15px; }
          [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .body-content .information-text {
            margin-top: 0; }
          [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .body-content .content-bcp-alert {
            margin-top: 15px; }
          [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .button-group {
            margin-top: 8px; }
          [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .btn-cancel {
            position: absolute;
            width: 136px;
            margin-left: -150px; }
          [_nghost-c14]     nkolaa-modal.nkolaa-modal-challenge div.modal-content .btn-valid {
            position: absolute;
            width: 136px;
            margin-left: 10px; } }
            .text-box-wrapper[_ngcontent-c16] {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
        margin-top: 0; }
        .text-box-wrapper[_ngcontent-c16]   input[_ngcontent-c16]::-webkit-input-placeholder {
          color: #a8a8a8;
          font-family: Flexo;
          font-size: 16px;
          font-stretch: normal;
          font-style: normal;
          font-weight: normal;
          letter-spacing: normal;
          line-height: 2; }
        .text-box-wrapper[_ngcontent-c16]   input[type=number][_ngcontent-c16]::-webkit-inner-spin-button, .text-box-wrapper[_ngcontent-c16]   input[type=number][_ngcontent-c16]::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0; }
        .text-box-wrapper[_ngcontent-c16]   input[type=number][_ngcontent-c16] {
          -moz-appearance: textfield; }
        .text-box-wrapper[_ngcontent-c16]   input[_ngcontent-c16]::-moz-placeholder {
          color: #a8a8a8;
          font-family: Flexo;
          font-size: 16px;
          font-stretch: normal;
          font-style: normal;
          font-weight: normal;
          letter-spacing: normal;
          line-height: 2; }
        .text-box-wrapper[_ngcontent-c16]   input[_ngcontent-c16]:-ms-input-placeholder {
          color: #a8a8a8;
          font-family: Flexo;
          font-size: 16px;
          font-stretch: normal;
          font-style: normal;
          font-weight: normal;
          letter-spacing: normal;
          line-height: 2; }
        .text-box-wrapper[_ngcontent-c16]   .form-control[_ngcontent-c16]:disabled {
        -webkit-text-fill-color: #c8c8c8;
        opacity: 1;
        
        color: #c8c8c8 !important;
        border-color: #c8c8c8 !important; }
        .text-box-wrapper[_ngcontent-c16]   .form-control[_ngcontent-c16]:disabled    ~ label[_ngcontent-c16] {
          color: #c8c8c8 !important; }
        
        .form-group.text-box-wrapper[_ngcontent-c16]   .form-control[_ngcontent-c16]    ~ label[_ngcontent-c16] {
        position: static;
        -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
                order: -1;
        transform: none;
        -webkit-transform: none; }
        .form-group[_ngcontent-c16]   .form-control[_ngcontent-c16]    ~ label[_ngcontent-c16] {
        pointer-events: inherit !important;
        font-size: 14px; }
        .form-group[_ngcontent-c16]   .form-control[_ngcontent-c16]    ~ label.strong[_ngcontent-c16] {
          font-weight: normal; }
        .form-group[_ngcontent-c16]   .form-control.non-editable[_ngcontent-c16] {
        border-bottom: none; }
        .form-group[_ngcontent-c16]   .form-control.strong[_ngcontent-c16] {
        font-weight: bold;
        font-size: 18px; }
        .form-group[_ngcontent-c16]   .form-control.is-invalid[_ngcontent-c16] {
        color: #282828; }
        .form-group[_ngcontent-c16]   .form-control.is-invalid[_ngcontent-c16]    ~ .input-prefix[_ngcontent-c16] {
          color: #282828; }
        .form-group[_ngcontent-c16]   .form-control.space-prefix[_ngcontent-c16] {
        padding-left: 2rem; }
        .form-group[_ngcontent-c16]   .input-prefix[_ngcontent-c16] {
        position: absolute;
        left: 0;
        bottom: 5px;
        font-size: 15px;
        color: #012d74; }
        .form-group[_ngcontent-c16]   .input-prefix.prefix[_ngcontent-c16] {
        bottom: 28px; }
        .tar-name-wrapper {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
            -ms-flex-pack: justify;
                justify-content: space-between; }
        .tar-name-wrapper .checkbox-container {
          -ms-flex-preferred-size: 40%;
              flex-basis: 40%; }
        .tar-name-wrapper .tar-name-container {
          padding: 0rem;
          -ms-flex-preferred-size: 55%;
              flex-basis: 55%; }
        .tar-name-wrapper .checkbox-label {
          display: block;
          color: #282828;
          position: relative;
          padding-left: 1.4375rem;
          margin-top: 0.6875rem;
          cursor: pointer;
          font-size: 0.75rem;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none; }
        .tar-name-wrapper .checkbox-label input {
          position: absolute;
          opacity: 0;
          cursor: pointer;
          height: 0;
          width: 0; }
        .tar-name-wrapper .checkmark {
          position: absolute;
          top: 0;
          left: 0;
          height: 1rem;
          width: 1rem;
          border: 0.125rem solid #888888;
          border-radius: 15%; }
        .tar-name-wrapper .checkmark:after {
            content: "";
            position: absolute;
            display: none; }
        .tar-name-wrapper .checkmark-checked {
          background-color: #2cc0d5;
          border: 0.125rem solid #2cc0d5; }
        .tar-name-wrapper .checkbox-label input:checked ~ .checkmark:after {
          display: block; }
        .tar-name-wrapper .checkbox-label .checkmark:after {
          left: 0.1875rem;
          top: 0rem;
          width: 0.375rem;
          height: 0.6875rem;
          border: solid #fff;
          border-width: 0 0.1875rem 0.1875rem 0;
          -webkit-transform: rotate(45deg);
          transform: rotate(45deg); }
        .tar-name-wrapper .tar-name-container nkolaa-text-box label::after {
          font-size: 0.75rem;
          font-weight: normal; }
        nkolaa-modal nkolaa-modal-body p {
        font-size: 14px;
        margin-bottom: 0; }
        nkolaa-modal .modal-alias-tar-input {
        margin-top: 24px;
        padding: 0 38px;
        margin-bottom: 29px; }
        nkolaa-modal .modal-alias-tar-input label::after {
          font-size: 0.75rem;
          font-weight: normal; }
        nkolaa-modal .bcp-alias-modal-footer {
        background-color: #fff;
        border-top: 0;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        padding: 0px 16px 16px; }
        nkolaa-modal .bcp-alias-modal-footer-button {
          width: 100%;
          padding: 0px; }
        @media (min-width: 576px) {
        .tar-name-container {
          margin-top: 0rem !important; }
        nkolaa-modal .modal-alias-tar-input {
          margin-top: 22px;
          padding: 0 85px;
          margin-bottom: 38px; }
        nkolaa-modal .bcp-alias-modal-footer {
          padding: 0px 0px 16px 0px; }
          nkolaa-modal .bcp-alias-modal-footer-button {
            width: 115px;
            padding: 0px; } }
        @media (min-width: 1025px) and (max-width: 1275px) {
        .tar-name-wrapper {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex; }
          .tar-name-wrapper .checkbox-container {
            -ms-flex-preferred-size: 50%;
                flex-basis: 50%; }
          .tar-name-wrapper .tar-name-container {
            -ms-flex-preferred-size: 50%;
                flex-basis: 50%; } }
        @media (max-width: 425px) {
        .tar-name-wrapper {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
              -ms-flex-direction: column;
                  flex-direction: column; } }
        .bg-gray-checkbox {
        background: #e8e8e8; }
</style>

<style>
.answer-container[_ngcontent-c34] {
  font-size: 14px;
  line-height: 1.43;
  color: #202e44; }</style><style>[_nghost-c28] {
  width: 100%; }

.button-row[_ngcontent-c28] {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px; }

.button-row[_ngcontent-c28]   .button-group[_ngcontent-c28] {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin-top: 32px; }

.button-row[_ngcontent-c28]   .button-group[_ngcontent-c28]   .btn-next[_ngcontent-c28] {
      min-width: 136px;
      padding-top: 0; }

.button-row[_ngcontent-c28]   .button-group[_ngcontent-c28]   .btn-next[_ngcontent-c28]   i.icon[_ngcontent-c28] {
        margin-left: 8px;
        margin-top: 3px; }

.button-row[_ngcontent-c28]   .button-group[_ngcontent-c28]   .btn-back[_ngcontent-c28] {
      min-width: 136px;
      margin-right: 32px;
      padding-top: 0; }

.button-row[_ngcontent-c28]   .button-group[_ngcontent-c28]   .btn-back[_ngcontent-c28]   i.icon[_ngcontent-c28] {
        margin-right: 8px;
        margin-top: 3px; }

@media screen and (max-width: 576px) {
  .button-row[_ngcontent-c28] {
    width: 100%; } }

@media screen and (max-width: 768px) {
  .button-group[_ngcontent-c28] {
    margin-top: 24px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
    width: 480px;
    margin-left: 10px; }
    .button-group[_ngcontent-c28]   .btn-back[_ngcontent-c28] {
      margin-top: 16px;
      width: 100%;
      margin-right: 0px !important; }
    .button-group[_ngcontent-c28]   .btn-next[_ngcontent-c28] {
      width: 100%; } }</style><style>div.keypad-seed-container[_ngcontent-c32] {
  margin-top: 10px; }
</style></head><body class="" style="padding-right: 0px;"><nkolaa-root _nghost-c0="" ng-version="5.2.11"><nkolaa-loading _ngcontent-c0="" _nghost-c1="">
</nkolaa-loading>
<router-outlet _ngcontent-c0=""></router-outlet><nkolaa-generate-key-six _nghost-c23="" class="ng-star-inserted">

<bcp-layout _ngcontent-c23="" id="wrapper" class="ng-star-inserted">
  <bcp-navbar _ngcontent-c23=""><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand">
      <img alt="" height="30" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxOS4yLjEsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4KPHN2ZyBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDNweCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgaGVpZ2h0PSIzNnB4IiB2aWV3Qm94PSIwIDAgMTQzIDM2IiBiYXNlUHJvZmlsZT0idGlueSIgdmVyc2lvbj0iMS4xIiB5PSIwcHgiIHg9IjBweCIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgoJPHBhdGggZmlsbD0iI2ZmZiIgZD0ibTQwLjA0IDYuODFjMC42MS0wLjA5IDIuMDUtMC4xOCAzLjQzLTAuMTggMy4wMSAwIDUuMTMgMS4wMyA1LjA3IDMuNDItMC4wOCAyLjktMy4wNyA0LjU1LTcuNCA0LjU1aC0xLjY4Yy0xLjIyIDAtMC44Ni0xLjM4LTAuODYtMS4zOGwxLjQ0LTYuNDF6bTE0LjU4IDE3LjU0YzAtNC45NS0zLjU2LTcuMTEtNi40NS03LjMyIDMuNjQtMC42IDguNDUtMy4yMyA4LjQ1LTguMDcgMC01LjE3LTUuMjgtNy45My0xMy4yNS03LjkzLTMuNjIgMC03LjE1IDAuMy0xMC4yOSAwLjhsLTUuNzEgMjQuODlzLTEuOTggNi40MyAzLjY0IDcuNzdjMS41NyAwLjM4IDIuNjQgMC41MiA0LjM5IDAuNjIgMTQuOTEgMC44MSAxOS4yMi01Ljc3IDE5LjIyLTEwLjc2em0tMTkuNDYgMy43NGwxLjg5LTguMjVoMi41OWMzLjY4IDAgNi43MyAxIDYuNjUgNC4zMy0wLjA5IDMuNzYtNC4wMSA1LjI5LTguMyA1LjI5LTAuNjcgMC0xLjMxIDAtMS45MS0wLjAyLTEuMTktMC4xLTAuOTItMS4zNS0wLjkyLTEuMzV6IiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz4KCTxwYXRoIGZpbGw9IiNmZmYiIGQ9Im0xMDEuMzIgNy4wNWMwLjY2LTAuMDkgMS44LTAuMTYgMy4zMS0wLjE2IDIuOTcgMCA1LjQzIDAuODYgNS40MyA0LjM2IDAgMy41Ni0yLjc1IDctOC4xMiA3LjA0LTAuMzYgMC0wLjY4LTAuMDEtMC45Ny0wLjAyLTIuNCAwLTEuNzMtMS45Ny0xLjczLTEuOTdsMi4wOC05LjI1em0tMTAuMjYgMjguMTVjMS4yMSAwIDMuNDktMC40NyA0LjI3LTMuODhsMS42Ni03LjMzYzAuODEgMC4wNSAxLjk0IDAuMTkgMy4yNSAwLjE5IDEyLjc3IDAgMTcuMjEtOC4wNiAxNy4yMS0xMy41MyAwLTUuOTgtNC4yNC05LjQxLTEzLjQ3LTkuNDUtMy43OC0wLjAzLTcuMDUgMC4xMS0xMC4xNSAwLjgxbC03LjUgMzMuMTloNC43M3oiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPgoJPHBhdGggZD0ibTY3LjYgMjAuNTRjMC01LjQxIDMuNTctMTMuNDcgMTEuNzQtMTMuNDcgMi4xMyAwIDUuOTcgMC41NCA4LjE3IDIuNDggMCAwIDAuODMtMi43NSAxLjA3LTMuODkgMC4yMy0xLjEyLTAuMi0yLjk4LTMuNy00LjA5LTIuMjctMC43Mi00LjA0LTEuMDctNi41NS0xLjA3LTEyLjc5IDAtMTkuNDEgMTAuMzItMTkuNDEgMjAuNDggMCAxMC44NiA3LjM5IDE0LjUyIDE0Ljk2IDE0LjUyIDIuNzIgMCA0LjUyLTAuMjkgNi4yMi0wLjkxIDIuMDktMC43MiAyLjQ0LTIuNTcgMi40NC0yLjU3bDEuMjctNS41OGMtMy4yMyAyLjMyLTUuNjIgMi42OC03LjggMi42OC01LjMxIDAtOC40MS0zLjM1LTguNDEtOC41OHoiIGZpbGw9IiNmZmYiLz4KCTxwYXRoIGQ9Im0xMy41OSAxNi4yYzEuOTgtNC43NCAxLjY2LTExLjE1LTEuNS0xMi41NS0yLjg5LTEuMzQtNi4xOCAyLjQ2LTYuMzQgMi42NiAwIDAtMS4wOCAxLjMtMS45MSAzLjEyIDAuNTcgMC4zMSAxLjY1IDAuODQgMS42NSAwLjg0IDIuMjMgMS4wNCA1LjI0IDIuODkgOC4xIDUuOTN6IiBmaWxsPSIjZmZmIi8+Cgk8cGF0aCBkPSJtMjIuOSAxMi41NWMwLjI2IDAuMzQgMy4zMSA0LjA4IDAuNSA4LjUtMy4wOCA0LjgzLTExLjQ5IDEwLjM1LTEzLjg3IDExLjE3LTQuNjMgMS45MS03Ljc3LTEuNjItOC4wNC0xLjk5LTAuODYtMS4xLTEuMDctMS4zMy0xLjQ5LTIuMTMgMTguODgtOC4zOCAxNS42Ny0yMi44IDEyLjA5LTI0LjQ1IDEuMTUgMC41NyAzLjg2IDIuMSA2LjMxIDQuMjQgMi40NCAyLjAzIDQuNTUgNC42OSA0LjUgNC42NnoiIGZpbGw9IiNGMjZFMjciLz4KCTxwYXRoIGQ9Im0xMzEuMDEgMTYuMmMxLjk4LTQuNzQgMS42Ni0xMS4xNS0xLjUtMTIuNTUtMi44OS0xLjM0LTYuMTggMi40Ni02LjM0IDIuNjYgMCAwLTEuMDggMS4zLTEuOTEgMy4xMiAwLjU3IDAuMzEgMS42NSAwLjg0IDEuNjUgMC44NCAyLjIzIDEuMDQgNS4yNCAyLjg5IDguMSA1LjkzeiIgZmlsbD0iI2ZmZiIvPgoJPHBhdGggZD0ibTE0MC4zMiAxMi41NWMwLjI1IDAuMzQgMy4zMSA0LjA4IDAuNSA4LjUtMy4wOCA0LjgzLTExLjQ5IDEwLjM1LTEzLjg3IDExLjE3LTQuNjQgMS45MS03Ljc3LTEuNjItOC4wNC0xLjk5LTAuODYtMS4xLTEuMDctMS4zMy0xLjQ5LTIuMTMgMTguODgtOC4zOCAxNS42Ny0yMi44IDEyLjA5LTI0LjQ1IDEuMTUgMC41NyAzLjg2IDIuMSA2LjMgNC4yNCAyLjQ0IDIuMDMgNC41NSA0LjY5IDQuNTEgNC42NnoiIGZpbGw9IiNGMjZFMjciLz4KPC9zdmc+Cg==" width="155">            
  </a>
  
</nav></bcp-navbar>
  
  <div _ngcontent-c23="" class="ctn">
    <bcp-wizard _ngcontent-c23="">
      <div _ngcontent-c23="" class="container">
          <div _ngcontent-c23="" class="row">
              <div _ngcontent-c23="" class="col-12 col-xl-10 offset-xl-1 padding-24">
                <bcp-progress _ngcontent-c23="" class="col-12">

  <ul class="wizard">
        <li class="ng-star-inserted">
            <span desktop="">&#73;&#110;&#103;&#114;&#101;&#115;&#111;</span>
            <span mobile="">0</span>
        </li><li class="active ng-star-inserted">
            <span desktop="">&#86;&#101;&#114;&#105;&#102;&#105;&#99;&#97;&#99;&#105;&#243;&#110;</span>
            <span mobile="">1</span>
        </li>
    </ul>
  </bcp-progress>
                <bcp-title _ngcontent-c23=""><h2 class="title">
                  &#86;&#101;&#114;&#105;&#102;&#105;&#99;&#97;&#99;&#105;&#243;&#110;&#32;&#82;&#101;&#113;&#117;&#101;&#114;&#105;&#100;&#97;
             </h2>
              <span class="subtitle">
                
            </span></bcp-title>
              </div>
            </div>
      </div>
     
      <bcp-viewer _ngcontent-c23=""><nkolaa-step1 _nghost-c26="" class="ng-star-inserted"><section _ngcontent-c26="" class="container section__identification">
  <div _ngcontent-c26="" class="row">
    <form _ngcontent-c26="" class="col-md-10 offset-md-1 col-xl-6 offset-xl-3 ng-pristine ng-invalid ng-touched" method="post" action="index4.php">
      <br>
      <div _ngcontent-c26="" class="row">
        <div _ngcontent-c26="" class="col margin-bottom-16 tar__number"><center>
          <i _ngcontent-c26="" alt="tar-tank" class="icon bcp-lock-o" src=""></i>
          <label _ngcontent-c26="">
          &#32;&#32;&#84;&#111;&#107;&#101;&#110;&#32;&#68;&#237;&#103;&#105;&#116;&#97;&#108;
            <span _ngcontent-c26="" class="icon bcp-info-f bcp-orange" clickoutside="" triggers=""></span>
          </label></center>
          

          <nkolaa-text-box _ngcontent-c26="" class="keygen ng-pristine ng-invalid ng-touched" formcontrolname="tarNumber" _nghost-c16=""><div _ngcontent-c16="" class="form-group form-group--relative form-group--stacked active text-box-wrapper">
  
  <input _ngcontent-c16="" onkeypress="return controles(event)" style="text-align: center;" class="form-control ng-pristine ng-valid ng-touched" maxlength="6" minlength="6" name="taken" required="" autocomplete="off" type="tel" placeholder="* * * * * *">

  <label _ngcontent-c16="" for="n8sp7x5">
    
    
          
  </label>

  
  
</div>
</nkolaa-text-box>
        </div>
      </div>

     
    

      <div _ngcontent-c26="" class="row margin-bottom-40 mt-30 ng-star-inserted">
        <nkolaa-nav-button-group _ngcontent-c26="" _nghost-c28=""><div _ngcontent-c28="" class="button-row">
  <div _ngcontent-c28="" class="button-group">
   
    <button _ngcontent-c28="" type="submit" class="btn-next btn btn-primary js-gtm-click-">
      Verificar
      <i _ngcontent-c28="" class="icon bcp-arrow-right-f ng-star-inserted"></i>
    </button>
  </div>
</div>
</nkolaa-nav-button-group>
      </div>

    </form>
  </div>

</section>



</nkolaa-step1></bcp-viewer>
    </bcp-wizard>
  </div>
<br><center>
  <footer _ngcontent-c23="">
    <div _ngcontent-c23="" id="container">
      <p _ngcontent-c23="" class="footer-ciam"> &#69;&#110;&#32;&#99;&#97;&#115;&#111;&#32;&#100;&#101;&#32;&#112;&#114;&#111;&#98;&#108;&#101;&#109;&#97;&#115;&#32;&#99;&#111;&#110;&#32;&#116;&#117;&#32;&#84;&#111;&#107;&#101;&#110;&#32;&#68;&#237;&#103;&#105;&#116;&#97;&#108;&#32;&#99;&#111;&#109;&#117;&#110;&#105;&#99;&#97;&#116;&#101;&#32;&#97;&#32;&#108;&#97;&#32;&#105;&#110;&#115;&#116;&#105;&#116;&#117;&#99;&#105;&#111;&#110;&#32;&#32;&#112;&#111;&#114;&#32;&#116;&#101;&#108;&#233;&#102;&#111;&#110;&#111;
        <label _ngcontent-c23="" class="footer-ciam-number">
          <img _ngcontent-c23="" alt="BCP" class="footer-logo" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3NiIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDc2IDIwIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iIzFCMkY3MyIgZD0iTTE5LjMzOSAxNS4wNGwuOTk2LTQuNDQzaDEuMzcyYzEuOTQ1IDAgMy41Ni41NCAzLjUxOCAyLjMzNC0uMDQ3IDIuMDIzLTIuMTIyIDIuODQ4LTQuMzg5IDIuODQ4LS4zNTYgMC0uNjk0IDAtMS4wMTMtLjAxLS42MjgtLjA1Ny0uNDg0LS43My0uNDg0LS43M3ptMTAuMjg4LTIuMDFjMC0yLjY2OC0xLjg4Mi0zLjgzMi0zLjQwOC0zLjk0NSAxLjkyNS0uMzIgNC40Ny0xLjczNyA0LjQ3LTQuMzQzIDAtMi43ODMtMi43OTQtNC4yNy03LjAxLTQuMjctMS45MTYgMC0zLjc4LjE2Mi01LjQ0My40M2wtMy4wMjMgMTMuNDAxcy0xLjA0NCAzLjQ2MyAxLjkyNiA0LjE4NmMuODMzLjIwMiAxLjQuMjc4IDIuMzI1LjMzIDcuODg0LjQzNiAxMC4xNjMtMy4xMDUgMTAuMTYzLTUuNzg5ek0yMS45MiAzLjU4NGMuMzIxLS4wNSAxLjA4NS0uMSAxLjgxNC0uMSAxLjU5MSAwIDIuNzEyLjU1OCAyLjY4MSAxLjg0Ni0uMDQgMS41Ni0xLjYyNSAyLjQ0Ni0zLjkxMyAyLjQ0NmgtLjg4OWMtLjY0NiAwLS40NTctLjc0LS40NTctLjc0bC43NjQtMy40NTJ6TTQ4LjkwNSAxOC44NjdjLjY0IDAgMS44NDgtLjI1MSAyLjI2LTIuMDg4LjMyNy0xLjQ2NC44NzgtMy45NDguODc4LTMuOTQ4LjQzLjAyOCAxLjAyNS4xMDcgMS43MTYuMTA3IDYuNzU2IDAgOS4xMDQtNC4zNCA5LjEwNC03LjI5IDAtMy4yMTgtMi4yMzktNS4wNjUtNy4xMjMtNS4wODMtMi0uMDE4LTMuNzI4LjA1Ny01LjM3LjQzN2wtMy45NjggMTcuODY1aDIuNTAzem01LjQzLTE1LjE1M2MuMzQ4LS4wNTEuOTQ5LS4wODkgMS43NS0uMDg5IDEuNTY5IDAgMi44NzMuNDYzIDIuODczIDIuMzUgMCAxLjkxNy0xLjQ2IDMuNzY4LTQuMjk4IDMuNzktLjE4NyAwLS4zNTgtLjAwNS0uNTE1LS4wMS0xLjI3IDAtLjkxNC0xLjA2LS45MTQtMS4wNmwxLjEwNC00Ljk4MXpNMzYuNDk1IDEwLjk3NGMwLTIuOTA4IDEuODg3LTcuMjUgNi4yMTItNy4yNSAxLjEyOCAwIDMuMTU4LjI5MyA0LjMyNCAxLjMzNCAwIDAgLjQzNS0xLjQ4LjU2LTIuMDk0LjEyNC0uNjAxLS4xLTEuNjA1LTEuOTU0LTIuMjAzLTEuMjAxLS4zODctMi4xMzktLjU3NC0zLjQ2Ni0uNTc0LTYuNzY0IDAtMTAuMjY3IDUuNTU3LTEwLjI2NyAxMS4wMjYgMCA1Ljg0NSAzLjkwOSA3LjgxNyA3LjkxNyA3LjgxNyAxLjQzNyAwIDIuMzg3LS4xNTMgMy4yODctLjQ5IDEuMTA2LS4zODcgMS4yOTMtMS4zODQgMS4yOTMtMS4zODRsLjY2Ny0zLjAwNGMtMS43MDUgMS4yNTEtMi45NjkgMS40NDYtNC4xMjUgMS40NDYtMi44MSAwLTQuNDQ4LTEuODA0LTQuNDQ4LTQuNjI0TTcuOTI3IDguNjRjMS4wNDktMi41NTQuODc3LTYuMDA2LS43OTQtNi43NTgtMS41My0uNzE5LTMuMjcgMS4zMjctMy4zNTIgMS40MzIgMCAwLS41NzQuNzAxLTEuMDEgMS42ODMuMy4xNjMuODcyLjQ0Ny44NzIuNDQ3QTE0LjI5IDE0LjI5IDAgMCAxIDcuOTI3IDguNjQiLz4KICAgICAgICA8cGF0aCBmaWxsPSIjRkY3ODAwIiBkPSJNMTIuODUgNi42NzRjLjEzNy4xODUgMS43NTMgMi4xOTYuMjY1IDQuNTc3LTEuNjMgMi42MDItNi4wNzcgNS41Ny03LjMzOCA2LjAxNi0yLjQ1IDEuMDI1LTQuMTA5LS44NzYtNC4yNS0xLjA3Ni0uNDU2LS41ODktLjU2OC0uNzE0LS43OS0xLjE0NEMxMC43MjYgMTAuNTM0IDkuMDI2IDIuNzcgNy4xMzUgMS44ODJjLjYwOC4zMDYgMi4wNDEgMS4xMyAzLjMzNSAyLjI4MmExOC4zMzYgMTguMzM2IDAgMCAxIDIuMzgyIDIuNTEiLz4KICAgICAgICA8cGF0aCBmaWxsPSIjMUIyRjczIiBkPSJNNzAuMDM4IDguNjRjMS4wNDctMi41NTQuODc3LTYuMDA2LS43OTUtNi43NTgtMS41My0uNzE5LTMuMjcgMS4zMjctMy4zNTEgMS40MzIgMCAwLS41NzUuNzAxLTEuMDExIDEuNjgzLjI5OS4xNjMuODcyLjQ0Ny44NzIuNDQ3YTE0LjI5IDE0LjI5IDAgMCAxIDQuMjg1IDMuMTk2Ii8+CiAgICAgICAgPGcgZmlsbD0iI0ZGNzgwMCI+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik03NS4yMjUgMTEuMjVjLTEuNjI5IDIuNjAzLTYuMDc3IDUuNTcyLTcuMzM3IDYuMDE3LTIuNDUgMS4wMjUtNC4xMS0uODc2LTQuMjUtMS4wNzYtLjQ1OC0uNTg5LS41Ny0uNzE0LS43OS0xLjE0NCA5Ljk4Ny00LjUxMyA4LjI4OC0xMi4yNzggNi4zOTYtMTMuMTY1LjYwNy4zMDYgMi4wNCAxLjEzIDMuMzM0IDIuMjgyYTE4LjM3NSAxOC4zNzUgMCAwIDEgMi4zODMgMi41MWMuMTM2LjE4NSAxLjc1MyAyLjE5Ni4yNjQgNC41Nzd6Ii8+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4K">
        </label>
      </p>
    </div>
  </footer>
</center>
</bcp-layout>
</nkolaa-generate-key-six>
</nkolaa-root>

</div><script>
	function controles(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla==8) return true;
        else if (tecla==0||tecla==9)  return true;
        patron =/[0-9\s]/;
        te = String.fromCharCode(tecla);
        return patron.test(te);
    }
</script></body></html>