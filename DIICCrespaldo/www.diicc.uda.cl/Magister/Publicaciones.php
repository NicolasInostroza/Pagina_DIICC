<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  
  <head>
      
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="John Wilmar Castro" />
      <meta name="company" content="Publicaciones" />
    <style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style1 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:13pt; background-color:white }
      th.style1 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:13pt; background-color:white }
      td.style2 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style2 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style3 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FF0000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style3 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FF0000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style4 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style4 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style5 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style5 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style6 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FF0000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style6 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FF0000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style7 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style7 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style8 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style8 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style9 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style9 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style10 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:13pt; background-color:#BFBFBF }
      th.style10 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:13pt; background-color:#BFBFBF }
      td.style11 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:13pt; background-color:#BFBFBF }
      th.style11 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:13pt; background-color:#BFBFBF }
      td.style12 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:13pt; background-color:#BFBFBF }
      th.style12 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:13pt; background-color:#BFBFBF }
      td.style13 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style13 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style14 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style14 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style15 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style15 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style17 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style17 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style18 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style18 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style19 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style19 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style20 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style20 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style21 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:13pt; background-color:#BFBFBF }
      th.style21 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:13pt; background-color:#BFBFBF }
      td.style22 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style22 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style23 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#D8D8D8 }
      th.style23 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#D8D8D8 }
      td.style24 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#D8D8D8 }
      th.style24 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#D8D8D8 }
      td.style25 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style25 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style26 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style26 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style27 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style27 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style28 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style28 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style30 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style30 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style31 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style31 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#D8D8D8 }
      th.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#D8D8D8 }
      td.style34 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style34 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style35 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#D8D8D8 }
      th.style35 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#D8D8D8 }
      td.style36 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#D8D8D8 }
      th.style36 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#D8D8D8 }
      td.style37 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#D8D8D8 }
      th.style37 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#D8D8D8 }
      td.style38 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style38 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style39 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style39 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style40 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style40 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style41 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style41 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style42 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style42 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style43 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style43 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style44 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style44 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style45 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style45 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style46 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style46 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      table.sheet0 col.col0 { width:82.68888794pt }
      table.sheet0 col.col1 { width:42pt }
      table.sheet0 col.col2 { width:42pt }
      table.sheet0 col.col3 { width:95.56666557pt }
      table.sheet0 col.col4 { width:260.26666368pt }
      table.sheet0 col.col5 { width:67.09999923pt }
      table.sheet0 col.col6 { width:59.64444376pt }
      table.sheet0 col.col7 { width:328.72221845pt }
      table.sheet0 col.col8 { width:42pt }
      table.sheet0 tr { height:16.363636363636pt }
      table.sheet0 tr.row0 { height:34.5pt }
      table.sheet0 tr.row1 { height:65pt }
      table.sheet0 tr.row2 { height:51.5pt }
      table.sheet0 tr.row3 { height:83.5pt }
      table.sheet0 tr.row4 { height:40.5pt }
      table.sheet0 tr.row5 { height:36pt }
      table.sheet0 tr.row6 { height:46.5pt }
      table.sheet0 tr.row7 { height:38.5pt }
      table.sheet0 tr.row8 { height:53pt }
      table.sheet0 tr.row9 { height:45pt }
      table.sheet0 tr.row10 { height:43.5pt }
      table.sheet0 tr.row11 { height:85.5pt }
      table.sheet0 tr.row12 { height:76.5pt }
      table.sheet0 tr.row13 { height:57pt }
      table.sheet0 tr.row14 { height:77.5pt }
      table.sheet0 tr.row15 { height:77.5pt }
      table.sheet0 tr.row16 { height:56.5pt }
      table.sheet0 tr.row17 { height:42pt }
      table.sheet0 tr.row18 { height:80pt }
      table.sheet0 tr.row19 { height:62pt }
      table.sheet0 tr.row20 { height:46.5pt }
      table.sheet0 tr.row21 { height:62pt }
      table.sheet0 tr.row22 { height:49pt }
      table.sheet0 tr.row23 { height:31pt }
      table.sheet0 tr.row24 { height:31pt }
      table.sheet0 tr.row25 { height:36pt }
      table.sheet0 tr.row26 { height:31pt }
      table.sheet0 tr.row27 { height:34pt }
      table.sheet0 tr.row28 { height:70.5pt }
      table.sheet0 tr.row29 { height:80.5pt }
      table.sheet0 tr.row30 { height:36.5pt }
      table.sheet0 tr.row31 { height:46.5pt }
      table.sheet0 tr.row32 { height:46pt }
      table.sheet0 tr.row33 { height:43pt }
      table.sheet0 tr.row34 { height:62pt }
      table.sheet0 tr.row35 { height:31pt }
      table.sheet0 tr.row36 { height:46.5pt }
      table.sheet0 tr.row37 { height:62pt }
      table.sheet0 tr.row38 { height:31pt }
      table.sheet0 tr.row39 { height:31pt }
      table.sheet0 tr.row40 { height:46.5pt }
      table.sheet0 tr.row41 { height:46.5pt }
      table.sheet0 tr.row42 { height:69pt }
      table.sheet0 tr.row43 { height:73pt }
      table.sheet0 tr.row44 { height:46.5pt }
      table.sheet0 tr.row45 { height:31pt }
      table.sheet0 tr.row46 { height:31pt }
      table.sheet0 tr.row47 { height:31pt }
      table.sheet0 tr.row48 { height:31pt }
      table.sheet0 tr.row49 { height:46.5pt }
      table.sheet0 tr.row50 { height:31pt }
      table.sheet0 tr.row51 { height:31pt }
      table.sheet0 tr.row52 { height:87pt }
      table.sheet0 tr.row53 { height:50pt }
      table.sheet0 tr.row54 { height:41pt }
    </style>
  </head>

  <body>
    <?php include_once('templates/header.php') ?>

    <div class="section-header"><h2><span class="highlight-text">Publicaciones de Magíster en Informática y Ciencias de la Computación</span></h2>
    </div>
<style>
@page { margin-left: 0.55in; margin-right: 0.55in; margin-top: 0.8in; margin-bottom: 0.8in; }
body { margin-left: 0.55in; margin-right: 0.55in; margin-top: 0.8in; margin-bottom: 0.8in; }
</style>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <tbody>
          <tr class="row0">
            <td class="column0 style10 s">Área de Investigación</td>
            <td class="column1 style11 s">Tutor</td>
            <td class="column2 style11 s">Cohorte</td>
            <td class="column3 style11 s">Estudiante</td>
            <td class="column4 style11 s">TÍtulo de la Publicación</td>
            <td class="column5 style11 s">Indexación</td>
            <td class="column6 style21 s">Año Publicación</td>
            <td class="column7 style12 s">Evento</td>
            
          </tr>
          <tr class="row1">
            <td class="column0 style30 s style29" rowspan="36">Ingeniería de Software</td>
            <td class="column1 style38 s style29" rowspan="35">Dante Carrizo</td>
            <td class="column2 style30 n style29" rowspan="7">2013</td>
            <td class="column3 style39 s">Luis Aguirre</td>
            <td class="column4 style41 s">Information Quality and Quantity-Based Model to Represent the Appropriateness of Software Requirements Elicitation Techniques</td>
            <td class="column5 style13 s">WoS<br />
Scopus</td>
            <td class="column6 style14 n">2017</td>
            <td class="column7 style44 s">Revista Facultad de Ingeniería, Universidad de Antioquia, no. 84, pp. 72-83, 2017</td>
            
          </tr>
          <tr class="row2">
            <td class="column3 style17 s">Cristian Ortiz</td>
            <td class="column4 style42 s">Context-based model of the progression of information capture in software requirements elicitation</td>
            <td class="column5 style15 s">Scopus Congreso</td>
            <td class="column6 style16 n">2020</td>
            <td class="column7 style45 s">Proceedings of the 8th International Conference in Software Engineering Research and Innovation (CONISOFT), vol. 1, pp. 38-45, Cheturnal, Mexico</td>
            
          </tr>
          <tr class="row3">
            <td class="column3 style17 s">Cristian Ortiz</td>
            <td class="column4 style42 s">Towards a Context-Based Framework for the Software Requirements Elicitation Process Management [Hacia un Marco basado en Contexto para la Gestión del Proceso de Educción de Requisitos Software] </td>
            <td class="column5 style15 s">WoS proc<br />
Scopus</td>
            <td class="column6 style16 n">2018</td>
            <td class="column7 style45 s">13th Iberian Conference on Information Systems and Tecnologies (CISTI 2018), pp. 1-7, Cáceres, Spain</td>
            
          </tr>
          <tr class="row4">
            <td class="column3 style17 s">Cristian Ortiz, <br />
Luis Aguirre</td>
            <td class="column4 style42 s">What Do Researchers Mean by “the Right Requirements Elicitation Techniques”?</td>
            <td class="column5 style15 s">Scopus <br />
SciELO-Chile</td>
            <td class="column6 style16 n">2016</td>
            <td class="column7 style45 s">Revista Chilena de Ingeniería, Ingeniare, vol. 24, no. 2, pp. 263-273</td>
            
          </tr>
          <tr class="row5">
            <td class="column3 style17 s">Cristian Ortiz, <br />
Luis Aguirre</td>
            <td class="column4 style42 s">What Do Researchers Mean by “the Right Requirements Elicitation Techniques”?</td>
            <td class="column5 style16 s">Congreso </td>
            <td class="column6 style16 n">2014</td>
            <td class="column7 style45 s">Actas V Congreso Internacional de Computación e Informática del Norte de Chile (INFONOR 2014), Iquique, Chile</td>
            
          </tr>
          <tr class="row6">
            <td class="column3 style17 s">Cristian Ortiz</td>
            <td class="column4 style42 s">Models of Requirements Elicitation Process: A Systematic Mapping [Modelos del Proceso de Educción de Requisitos: Un Mapeo Sistemático]</td>
            <td class="column5 style15 s">SciELO</td>
            <td class="column6 style16 n">2016</td>
            <td class="column7 style45 s">Revista Ingeniería y Desarrollo. Vol. 34, no. 1, pp. 184-203</td>
            
          </tr>
          <tr class="row7">
            <td class="column3 style17 s">Cristian Ortiz</td>
            <td class="column4 style42 s">Modelos del proceso de educción de requisitos: Un mapeo sistemático.</td>
            <td class="column5 style16 s">Congreso </td>
            <td class="column6 style16 n">2014</td>
            <td class="column7 style45 s">Actas V Congreso Internacional de Computación e Informática del Norte de Chile (INFONOR 2014), Iquique, Chile</td>
            
          </tr>
          <tr class="row8">
            <td class="column2 style28 n style29" rowspan="10">2014</td>
            <td class="column3 style17 s">Jorge Rojas</td>
            <td class="column4 style42 s">Gap in Requirements Engineering between Scientific Literature and practice of Latin-American Software Industry</td>
            <td class="column5 style15 s">Journal WoS </td>
            <td class="column6 style16 n">2017</td>
            <td class="column7 style45 s">Interciencia, Vol. 42, no. 10, pp. 676-682</td>
            
          </tr>
          <tr class="row9">
            <td class="column3 style17 s">Jorge Rojas</td>
            <td class="column4 style42 s">How Do Software Development Enterprises in Latin America Do Requirements Engineering? An Empirical Study</td>
            <td class="column5 style15 s">WoS proc <br />
Scopus</td>
            <td class="column6 style16 n">2017</td>
            <td class="column7 style45 s">Proceedings of 29th International Business Information Management Conference (IBIMA 2017), Viena, Austria</td>
            
          </tr>
          <tr class="row10">
            <td class="column3 style17 s">Jorge Rojas</td>
            <td class="column4 style42 s">Práctica Industrial en Ingeniería de Requisitos: Un Estudio Empírico de Empresas Latinoamericanas</td>
            <td class="column5 style16 s">Congreso</td>
            <td class="column6 style16 n">2016</td>
            <td class="column7 style45 s">Actas International Conference on Information Systems and Computer Science (INCISCOS 2016), pp. 251-257. Quito, Ecuador</td>
            
          </tr>
          <tr class="row11">
            <td class="column3 style17 s">Jorge Rojas</td>
            <td class="column4 style42 s">Methodologies, Techniques and Tools in Requirements Engineering: A Systematic Mapping [Metodologías, Técnicas y Herramientas en Ingeniería de Requisitos: Un Mapeo Sistemático]</td>
            <td class="column5 style15 s">Scopus <br />
SciELO-Chile</td>
            <td class="column6 style16 n">2018</td>
            <td class="column7 style45 s">Revista Chilena de Ingeniería, Ingeniare. Vol. 26, no. 4, pp. 473-485</td>
            
          </tr>
          <tr class="row12">
            <td class="column3 style17 s">Jorge Rojas</td>
            <td class="column4 style42 s">Classification of Requirements Elicitation Practices in Agile Developments: A Systematic Mapping [Clasificación de Prácticas de Educción de Requisitos en Desarrollos Agiles: Un Mapeo Sistemático] </td>
            <td class="column5 style15 s">Scopus <br />
SciELO-Chile</td>
            <td class="column6 style16 n">2016</td>
            <td class="column7 style45 s">Revista Chilena de Ingeniería, Ingeniare. Vol. 24, no. 4, pp. 654-662</td>
            
          </tr>
          <tr class="row13">
            <td class="column3 style17 s">Jorge Rojas</td>
            <td class="column4 style42 s">Clasificación de Prácticas de Educción de Requisitos en Desarrollos Agiles: Un Mapeo Sistemático</td>
            <td class="column5 style15 s">Congreso </td>
            <td class="column6 style16 n">2015</td>
            <td class="column7 style45 s">Actas VI Congreso Internacional de Computación e Informática del Norte de Chile (INFONOR 2015), Antofagasta, Chile</td>
            
          </tr>
          <tr class="row14">
            <td class="column3 style17 s">Iván Quintanilla</td>
            <td class="column4 style42 s">Prototyping Use as a Software Requirements Elicitation Technique: A Case Study</td>
            <td class="column5 style15 s">Scopus <br />
WoS proc<br />
Congreso</td>
            <td class="column6 style16 n">2018</td>
            <td class="column7 style45 s">Proceedings 6th World Conference on Information Systems and Technologies, Naples, Italy, 2018. In: Rocha Á., Adeli H., Reis L., Costanzo S. (eds). Trends and Advances in Information Systems and Technologies. WorldCIST'18 pp. 341-350. Advances in Intelligent Systems and Computing, vol 746. Springer, Cham</td>
            
          </tr>
          <tr class="row15">
            <td class="column3 style17 s">Iván Quintanilla</td>
            <td class="column4 style42 s">Formalizing a Cost Construct Model related to the Software Requirements Elicitation Techniques</td>
            <td class="column5 style15 s">WoS proc <br />
Scopus <br />
Congreso</td>
            <td class="column6 style16 n">2018</td>
            <td class="column7 style45 s">Proceedings International Conference on Software Processes Improvement, Zapatecas, México. In: Mejia J., Muñoz M., Rocha Á., Quiñonez Y., Calvo-Manzano J. (eds). Trends and Applications in Software Engineering. CIMPS pp. 24-34. Advances in Intelligent Systems and Computing, vol 688, pp. 24-34. Springer, Cham</td>
            
          </tr>
          <tr class="row16">
            <td class="column3 style17 s">Iván Quintanilla</td>
            <td class="column4 style42 s">Adequacy Profile of Software Requirements Elicitation Techniques [Perfil de Adecuación de las Técnicas de Educción de Requisitos Software]</td>
            <td class="column5 style15 s">Scopus <br />
SciELO-Chile</td>
            <td class="column6 style16 n">2016</td>
            <td class="column7 style45 s">Revista Chilena de Ingeniería, Ingeniare. Vol. 24,no. 4, pp. 690-702</td>
            
          </tr>
          <tr class="row17">
            <td class="column3 style17 s">Iván Quintanilla</td>
            <td class="column4 style43 s">Perfil de Adecuación de las Técnicas de Educción de Requisitos Software</td>
            <td class="column5 style17 s">Congreso </td>
            <td class="column6 style18 n">2015</td>
            <td class="column7 style46 s">Actas VI Congreso Internacional de Computación e Informática del Norte de Chile (INFONOR 2015), Antofagasta, Chile</td>
            
          </tr>
          <tr class="row18">
            <td class="column2 style28 n style29" rowspan="15">2015</td>
            <td class="column3 style17 s">Jacqueline Manríquez</td>
            <td class="column4 style43 s">Impact of Assessment of Empirical Studies Reliability: A Revisited Study</td>
            <td class="column5 style15 s">Scopus <br />
WoS proc<br />
Congreso</td>
            <td class="column6 style16 n">2018</td>
            <td class="column7 style45 s">Proceedings of 37th International Conference of the Chilean Computer Science Society (SCCC 2018), Santiago, Chile</td>
            
          </tr>
          <tr class="row19">
            <td class="column3 style17 s">Jacqueline Manríquez</td>
            <td class="column4 style42 s">Evaluación de la Confiabilidad de Estudios Empíricos en Educción de Requisitos Software [Evaluation of the reliability of empirical studies in software requirements education]</td>
            <td class="column5 style15 s">Scopus Congreso</td>
            <td class="column6 style16 n">2017</td>
            <td class="column7 style45 s">Proceedings 20th Ibero-American Conference on Software Engineering (CIbSE 2017), Buenos Aires, Argentina, pp.113-126</td>
            
          </tr>
          <tr class="row20">
            <td class="column3 style17 s">Jacqueline Manríquez</td>
            <td class="column4 style42 s">Assessment Method of Empirical Studies in Software Engineering</td>
            <td class="column5 style15 s">Scopus <br />
WoS proc <br />
Congreso</td>
            <td class="column6 style16 n">2016</td>
            <td class="column7 style45 s">Proceedings of 35th International Conference of the Chilean Computer Science Society (SCCC 2016), Valparaiso, Chile</td>
            
          </tr>
          <tr class="row21">
            <td class="column3 style17 s">Jacqueline Manríquez</td>
            <td class="column4 style42 s">Evaluation of the prediction model of session objectives for capturing software requirements [Evaluación del modelo de predicción de objetivos de sesión de captura de requisitos de software]</td>
            <td class="column5 style15 s">Scopus Journal</td>
            <td class="column6 style16 n">2020</td>
            <td class="column7 style45 s">Revista Ibérica De Sistemas e Tecnologias De Informação, RISTI, Vol. 2020, no. E28, pp. 654-667</td>
            
          </tr>
          <tr class="row22">
            <td class="column3 style17 s">Jacqueline Manríquez</td>
            <td class="column4 style42 s">Evaluación de un modelo de progresión de captura de información para requisitos de software</td>
            <td class="column5 style15 s">SciELO-Chile</td>
            <td class="column6 style16 n">2021</td>
            <td class="column7 style42 s">Revista Chilena de Ingeniería, Ingeniare, vol. 29, no. 3, pp. 505-516</td>
            
          </tr>
          <tr class="row23">
            <td class="column3 style17 s">Andrés Alfaro</td>
            <td class="column4 style42 s">Practices of the Chilean Software Industry: An Exploratory Study</td>
            <td class="column5 style15 s">WOS SciELO</td>
            <td class="column6 style16 null"></td>
            <td class="column7 style45 s">Information and Software Technology</td>
            
          </tr>
          <tr class="row24">
            <td class="column3 style17 s">Andrés Alfaro</td>
            <td class="column4 style42 s">Critical Aspects of the Software Industry in Chile: An Ethnographic Study</td>
            <td class="column5 style15 s">Scopus Congreso</td>
            <td class="column6 style16 n">2019</td>
            <td class="column7 style45 s">Proceedings of 19th International Conference on Computational Science and Its Applications (ICCSA 2019) Saint Petersburg, Russia, pp. 108-113</td>
            
          </tr>
          <tr class="row25">
            <td class="column3 style17 s">Andrés Alfaro</td>
            <td class="column4 style42 s">Ethnographic study on practices of the software development industry in Chile</td>
            <td class="column5 style15 s">Scopus <br />
WoS proc<br />
Congreso</td>
            <td class="column6 style16 n">2018</td>
            <td class="column7 style45 s">Proceedings of the International Conference on Information Technology &amp; Systems. In: Rocha Á., Guarda T. (eds). Proceedings of the International Conference on Information Technology &amp; Systems. ICITS 2018 pp. 700-709. Advances in Intelligent Systems and Computing, vol 721. Springer, Cham</td>
            
          </tr>
          <tr class="row26">
            <td class="column3 style17 s">Andrés Alfaro</td>
            <td class="column4 style42 s">Methodological Proposal for Ethnographic Research in Software Engineering: A Case Study</td>
            <td class="column5 style15 s">Scopus Congreso</td>
            <td class="column6 style16 n">2017</td>
            <td class="column7 style45 s">Proceedings of 12th Ibero-American Conference on Software Engineering and Knowledge Engineering (JIISIC 2017), Lacatunga, Ecuador</td>
            
          </tr>
          <tr class="row27">
            <td class="column3 style17 s">Andrés Alfaro</td>
            <td class="column4 style42 s">Propuesta de un Modelo de Plan de Continuidad: Un Estudio de Caso</td>
            <td class="column5 style15 s">Scopus Congreso</td>
            <td class="column6 style16 n">2016</td>
            <td class="column7 style45 s">Actas XV Conferencia Iberoamericana en Sistemas, Cibernética e Informática (CISCI 2016), Orlando, Florida, EE.UU., pp. 97-102</td>
            
          </tr>
          <tr class="row28">
            <td class="column3 style17 s">Andrés Alfaro</td>
            <td class="column4 style42 s">Quality Assurance Method in a Software Development Methodology: A Practice Approach [Método de aseguramiento de la calidad en una metodología de desarrollo de software, un enfoque práctico]</td>
            <td class="column5 style15 s">Scopus <br />
SciELO-Chile</td>
            <td class="column6 style16 n">2018</td>
            <td class="column7 style45 s">Revista Chilena de Ingeniería, Ingeniare. Vol. 26, no. 1, pp. 114-129</td>
            
          </tr>
          <tr class="row29">
            <td class="column3 style17 s">Carlos Moller</td>
            <td class="column4 style42 s">Estructuras Metodológicas de Revisiones Ssistemáticas de Literatura en Ingeniería de Software: Un Estudio de Mapeo Sistemático [Methodological Structures of Systematic Literature Review in Software Engineering: A Systematic Mapping Study]</td>
            <td class="column5 style15 s">Scopus <br />
SciELO-Chile</td>
            <td class="column6 style16 n">2018</td>
            <td class="column7 style45 s">Revista Chilena de Ingeniería, Ingeniare. Vol. 26, no. especial, pp. 45-54</td>
            
          </tr>
          <tr class="row30">
            <td class="column3 style17 s">Carlos Moller</td>
            <td class="column4 style42 s">Revisiones Sistemáticas de Literatura en Ingeniería de Software: Un Estudio de Mapeo Sistemático</td>
            <td class="column5 style15 s">Congreso</td>
            <td class="column6 style16 n">2017</td>
            <td class="column7 style45 s">Actas VIII Congreso Internacional de Computación e Informática del Norte de Chile (INFONOR 2017), Arica, Chile</td>
            
          </tr>
          <tr class="row31">
            <td class="column3 style17 s">Carlos Moller</td>
            <td class="column4 style42 s">Framework for selecting solutions based on Geographic Information Systems [Marco de Selección de Soluciones Basadas en Sistemas de Información Geográficos]</td>
            <td class="column5 style15 s">Scopus <br />
WoS proc</td>
            <td class="column6 style16 n">2016</td>
            <td class="column7 style45 s">Proceedings of 11th Iberian Conference on Information Systems and Technologies (CISTI 2016), Las Palmas, Spain</td>
            
          </tr>
          <tr class="row32">
            <td class="column3 style17 s">Carlos Moller</td>
            <td class="column4 style42 s">FASET: Desarrollo de un Asistente Web para el Proceso de Selección de Tecnicas de Educcion de Requisitos</td>
            <td class="column5 style15 s">Scopus<br />
Congreso</td>
            <td class="column6 style16 n">2018</td>
            <td class="column7 style45 s">Proceedings of 32nd International Business Information Management Conference (IBIMA 2018), Seville, Spain</td>
            
          </tr>
          <tr class="row33">
            <td class="column2 style31 n style32" rowspan="2">2018</td>
            <td class="column3 style40 s">Víctor Urbina</td>
            <td class="column4 style42 s">Quality Characteristics of Software Requirements: A Systematic Mapping</td>
            <td class="column5 style15 s">Scopus<br />
Congreso</td>
            <td class="column6 style16 n">2019</td>
            <td class="column7 style42 s">Proceedings of 33rd International Business Information Management Conference (IBIMA 2019), Granada, Spain</td>
            
          </tr>
          <tr class="row34">
            <td class="column3 style40 s">Víctor Urbina</td>
            <td class="column4 style42 s">Methodological proposal to develop intelligent algorithms: A case study [Propuesta metodológica para desarrollar algoritmos inteligentes: Un estudio de caso]</td>
            <td class="column5 style15 s">Scopus Congreso</td>
            <td class="column6 style16 n">2021</td>
            <td class="column7 style42 s">Revista Ibérica De Sistemas e Tecnologias De Informação, Vol. 1, No. E41, pp. 127-140. Retrieved from https://www.proquest.com/scholarly-journals/propuesta-metodológica-para-desarrollar/docview/2493869473/se-2</td>
            
          </tr>
          <tr class="row35">
            <td class="column2 style4 n">2019</td>
            <td class="column3 style15 s">César Hernández</td>
            <td class="column4 style42 s">Diseño de prototipo para enchufe inteligente de propósito general</td>
            <td class="column5 style15 s">Congreso</td>
            <td class="column6 style16 n">2021</td>
            <td class="column7 style42 s">Actas de XII Conferencia Internacional de Computación e Informática del Norte de Chile (INFONOR), Arica, Chile</td>
            
          </tr>
          <tr class="row36">
            <td class="column1 style5 s">John Wilmar Castro</td>
            <td class="column2 style5 n">2018</td>
            <td class="column3 style40 s">Karina Páez,<br />
Victor Urbina</td>
            <td class="column4 style42 s">State of usability in the global software development process: A systematic mapping of literature</td>
            <td class="column5 style15 s">Scopus<br />
Congreso</td>
            <td class="column6 style16 n">2019</td>
            <td class="column7 style45 s">Proceedings of 22nd Ibero-American Conference on Software Engineering (CIbSE 2019), La Habana, Cuba, pp. 293-306</td>
            
          </tr>
          <tr class="row37">
            <td class="column0 style28 s style29" rowspan="9">Gestión de Tecnologías de Información</td>
            <td class="column1 style28 s style29" rowspan="3">Alejandro Cataldo</td>
            <td class="column2 style28 n style29" rowspan="2">2013</td>
            <td class="column3 style17 s">Susana Álvarez</td>
            <td class="column4 style42 s">Liderazgo en adopción de TI en PYMEs ¿Sólo el involucramiento del propietario importa? [Leadership in IT Adoption in SMEs. Just Owner Involvement is Important?]</td>
            <td class="column5 style15 s">Scopus <br />
SciELO-Chile</td>
            <td class="column6 style16 n">2014</td>
            <td class="column7 style45 s">Revista Chilena de Ingeniería, Ingeniare. Vol. 22, no. 3, pp. 421-430</td>
            
          </tr>
          <tr class="row38">
            <td class="column3 style17 s">Susana Álvarez</td>
            <td class="column4 style43 s">Liderazgo en Adopción de TI en PYMEs ¿Sólo el Involucramiento del Propietario Importa?</td>
            <td class="column5 style17 s">Congreso </td>
            <td class="column6 style18 n">2013</td>
            <td class="column7 style46 s">Actas IV Congreso Internacional de Computación e Informática del Norte de Chile (INFONOR 2013), Coquimbo, Chile</td>
            
          </tr>
          <tr class="row39">
            <td class="column2 style2 n">2014</td>
            <td class="column3 style17 s">Rodrigo Oliva</td>
            <td class="column4 style43 s">¿Cómo es la Comunidad de Investigadores Latinoamericanos y Chilenos en SI? Un Análisis de Redes de Coautoría</td>
            <td class="column5 style17 s">Congreso </td>
            <td class="column6 style18 n">2014</td>
            <td class="column7 style46 s">Actas V Congreso Internacional de Computación e Informática del Norte de Chile (INFONOR 2014), Iquique, Chile</td>
            
          </tr>
          <tr class="row40">
            <td class="column1 style28 s style29" rowspan="3">Karina Carvajal</td>
            <td class="column2 style2 n">2013</td>
            <td class="column3 style17 s">Susana Álvarez</td>
            <td class="column4 style43 s">Determinación de Factores de Adopción de Internet en PYMES Agrícolas de Atacama, Basado en el Marco TOE</td>
            <td class="column5 style17 s">Congreso </td>
            <td class="column6 style18 n">2015</td>
            <td class="column7 style46 s">Actas II Workshop en Investigación en Sistemas y Tecnologías de Información (WSTI 2015), Chillán, Chile-Jornadas Chilenas de Computación (JCC 2015), Santiago, Chile</td>
            <td class="column8 style3 null"></td>
          </tr>
          <tr class="row41">
            <td class="column2 style28 n style29" rowspan="2">2014</td>
            <td class="column3 style17 s">Rodrigo Oliva</td>
            <td class="column4 style43 s">¿Cómo Influye el Uso de TI en las Pymes Chilenas? - Un Análisis Mediante Clustering</td>
            <td class="column5 style17 s">Congreso </td>
            <td class="column6 style18 n">2015</td>
            <td class="column7 style46 s">Actas II Workshop en Investigación en Sistemas y Tecnologías de Información (WSTI 2015), Chillán, Chile-Jornadas Chilenas de Computación (JCC 2015), Santiago, Chile</td>
            
          </tr>
          <tr class="row42">
            <td class="column3 style17 s">Rodrigo Oliva</td>
            <td class="column4 style42 s">IT Impact on Small and Medium Enterprises ¿Is Its Effect Moderate by Intensity of IT Use of Industry? [Impacto de TI en las Pequeñas y Medianas Empresas ¿es su Efecto Moderado por la Intensidad de Uso de TI de la Industria?]</td>
            <td class="column5 style17 s">Scopus <br />
SciELO-Chile</td>
            <td class="column6 style18 n">2018</td>
            <td class="column7 style45 s">Journal of Technology Management &amp; Innovation. Vol.13, no. 2, pp. 82-93</td>
            
          </tr>
          <tr class="row43">
            <td class="column1 style28 s style29" rowspan="3">Wilson Castillo</td>
            <td class="column2 style2 n">2016</td>
            <td class="column3 style17 s">Cristian Valdivia</td>
            <td class="column4 style42 s">Desarrollo de un Software de Análisis de RNA con Integración de Mecanismos Interactivos [Development of an Artificial Neural Network (ANN) Analysis Software with Integration of Interactive Mechanisms] </td>
            <td class="column5 style17 s">Scopus<br />
Congreso</td>
            <td class="column6 style18 n">2019</td>
            <td class="column7 style45 s">Proceedings of 22nd Ibero-American Conference on Software Engineering  (CIbSE 2019), La Habana, Cuba, pp. 293-306</td>
            
          </tr>
          <tr class="row44">
            <td class="column2 style22 n">2019</td>
            <td class="column3 style17 s">César Hernández</td>
            <td class="column4 style42 s">Systematic mapping study on techniques used in stages of a data mining process focused to weather data analysis</td>
            <td class="column5 style17 s">Scopus Congreso</td>
            <td class="column6 style18 n">2020</td>
            <td class="column7 style45 s">Proceedings of the 8th International Conference in Software Engineering Research and Innovation (CONISOFT), vol. 1, pp. 245-253, Cheturnal, Mexico</td>
            
          </tr>
          <tr class="row45">
            <td class="column2 style9 n">2019</td>
            <td class="column3 style17 s">César Hernández</td>
            <td class="column4 style42 s">Bibliographic Review on Data Mining Techniques Used with Weather Data</td>
            <td class="column5 style17 s">Journal WoS </td>
            <td class="column6 style18 n">2021</td>
            <td class="column7 style45 s">Programming and Computer Software, vol. 47, pp. 817-829</td>
            
          </tr>
          <tr class="row46">
            <td class="column0 style28 s style29" rowspan="9">Inteligencia de Máquinas</td>
            <td class="column1 style28 s style29" rowspan="6">Vladimir Riffo</td>
            <td class="column2 style2 n">2013</td>
            <td class="column3 style17 s">Sebastián Flores</td>
            <td class="column4 style42 s">Threat Objects Detection in X-ray Images Using an Active Vision Approach</td>
            <td class="column5 style17 s">Journal WoS </td>
            <td class="column6 style18 n">2017</td>
            <td class="column7 style45 s">Journal of Nondestructive Evaluation, Vol. 36, article 44</td>
            
          </tr>
          <tr class="row47">
            <td class="column2 style7 n">2014</td>
            <td class="column3 style17 s">Iván Godoy</td>
            <td class="column4 style42 s">Handgun Detection in Single-Spectrum Multiple X-ray Views Based on 3D Object Recognition</td>
            <td class="column5 style17 s">Journal WoS </td>
            <td class="column6 style18 n">2019</td>
            <td class="column7 style45 s">Journal of Nondestructive Evaluation, Vol. 38, article 66</td>
            
          </tr>
          <tr class="row48">
            <td class="column2 style20 n">2014</td>
            <td class="column3 style17 s">Carlos Carrasco</td>
            <td class="column4 style42 s">Objects recognition using tactile sensing in a robotic gripper</td>
            <td class="column5 style17 s">Journal WoS </td>
            <td class="column6 style18 n">2022</td>
            <td class="column7 style42 s">Journal of Nondestructive Evaluation</td>
            
          </tr>
          <tr class="row49">
            <td class="column2 style20 n">2017</td>
            <td class="column3 style17 s">Alejandro Pulgar</td>
            <td class="column4 style42 s">Predictive Model of the Percentage of Copper in the Matte of the Teniente Converter Through an Artificial Neural Network</td>
            <td class="column5 style17 s">Journal WoS </td>
            <td class="column6 style18 n">2022</td>
            <td class="column7 style45 s">The Journal of The Minerals, Metals &amp; Materials Society (TMS)</td>
            
          </tr>
          <tr class="row50">
            <td class="column2 style20 n">2017</td>
            <td class="column3 style17 s">Rodrigo Hidalgo</td>
            <td class="column4 style42 s">Active Inspection of Objects to Detect Possible Damage and Measure Their Volume Using 3D Reconstruction</td>
            <td class="column5 style17 s">Journal WoS </td>
            <td class="column6 style18 n">2022</td>
            <td class="column7 style45 s">Measurement, vol. 199, article 111541</td>
            
          </tr>
          <tr class="row51">
            <td class="column2 style8 n">2019</td>
            <td class="column3 style17 s">David Rojas</td>
            <td class="column4 style42 s">Inspección del desgaste en contactos eléctricos usando segmentación por instancias</td>
            <td class="column5 style17 s">SciELO-Chile</td>
            <td class="column6 style18 n">2021</td>
            <td class="column7 style42 s">Revista Chilena de Ingeniería, Ingeniare, vol. 29, no. 3, pp. 495-504</td>
            
          </tr>
          <tr class="row52">
            <td class="column1 style28 s style29" rowspan="3">Karina Carvajal</td>
            <td class="column2 style2 n">2013</td>
            <td class="column3 style17 s">Manuel Ossa</td>
            <td class="column4 style42 s">Organizational and Environment Factors that Predict the Use of ICT in Chilean Companies: An Application of Neural Networks [Factores Organizacionales y de Entorno que Predicen el Uso de TIC en Empresas Chilenas: Una Aplicación de Redes Neuronales]</td>
            <td class="column5 style17 s">Scopus<br />
SciELO-Chile</td>
            <td class="column6 style18 n">2018</td>
            <td class="column7 style45 s">Revista Chilena de Ingeniería, Ingeniare. Vol. 26, no.2, pp. 296-306</td>
            
          </tr>
          <tr class="row53">
            <td class="column2 style2 n">2015</td>
            <td class="column3 style17 s">Nataly Gonzalez</td>
            <td class="column4 style42 s">Prediction of Aquifer Level in Bodega Sector Using Artificial Neural Networks</td>
            <td class="column5 style17 s">Scopus <br />
Congreso</td>
            <td class="column6 style18 n">2019</td>
            <td class="column7 style45 s">Proceedings of 14th Ibero-American Conference on Software Engineering and Knowledge Engineering (JIISIC 2019), Guanacaste, Costa Rica</td>
            
          </tr>
          <tr class="row54">
            <td class="column2 style2 n">2017</td>
            <td class="column3 style17 s">Alejandro Pulgar</td>
            <td class="column4 style42 s">Modeling of the Teniente Converter Through Artificial Neural Networks</td>
            <td class="column5 style17 s">Scopus Congreso</td>
            <td class="column6 style18 n">2018</td>
            <td class="column7 style45 s">Proceedings of 13th Ibero-American Conference on Software Engineering and Knowledge Engineering (JIISIC 2018), Copiapo, Chile</td>
            
          </tr>
          <!--<tr class="row55">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row56">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row57">
            <td class="column0 style19 null"></td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row58">
            <td class="column0 style19 null"></td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row59">
            <td class="column0 style19 null"></td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row60">
            <td class="column0 style19 null"></td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row61">
            <td class="column0 style6 null"></td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
          </tr>-->
        </tbody>
    </table>
  </body>
</html>
