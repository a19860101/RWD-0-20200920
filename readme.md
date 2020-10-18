# HTML
HTML
Hyper Text Markup Language
超文字標記語言
## 目前標準
HTML 5
## 舊制標準
HTML 4.01
XHTML 1.1
## 常用標籤
- html 開始撰寫html標籤
- head 網頁相關資訊
- title 網頁標題
- meta 網頁資料
- body 網頁內容
### 標題
```html
<h1>標題一</h1>
<h2>標題二</h2>
<h3>標題三</h3>
<h4>標題四</h4>
<h5>標題五</h5>
<h6>標題六</h6>
```
### 段落
```html
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed facilis eligendi quod perferendis esse vel, dolore rerum voluptates adipisci cumque nesciunt excepturi laboriosam doloribus sequi corporis odio labore.
</p>
```
### 圖片 
```html
<img src="https://picsum.photos/id/123/800/600" alt="替代文字" width="400" height="300" title="圖說">
```
- src
- alt
- width
- height 
- title
### 連結
```html
<a href="https://tw.yahoo.com" target="_blank" title="YAHOOOOOOO">YAHOO</a>
<a href="002.html">002</a>
```
a 連結
- href
- title
- target
## 清單
```html
<ul type="disc">
    <li>項目清單</li>
    <li>項目清單</li>
</ul>
<ul type="circle">
    <li>項目清單</li>
    <li>項目清單</li>
</ul>
<ul type="square">
    <li>項目清單</li>
    <li>項目清單</li>
</ul>
<ol type="1">
    <li>編號清單</li>
    <li>編號清單</li>
</ol>
<ol type="A">
    <li>編號清單</li>
    <li>編號清單</li>
</ol>
<ol type="a">
    <li>編號清單</li>
    <li>編號清單</li>
</ol>
<ol type="I">
    <li>編號清單</li>
    <li>編號清單</li>
</ol>
<ol type="i">
    <li>編號清單</li>
    <li>編號清單</li>
</ol>
<dl>
    <dt>清單標題</dt>
    <dd>清單描述</dd>
    <dt>清單標題</dt>
    <dd>清單描述</dd>
</dl>
```
## 表格
```html
<table border="1" width="600" height="400">
    <thead>
        <tr>
            <th>標題</th>
            <th>標題</th>
            <th>標題</th>
            <th>標題</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
        </tr>
        <tr>
            <td>E</td>
            <td rowspan="2">F</td>
            <td>G</td>
            <td>H</td>
        </tr>
        <tr>
            <td>I</td>
            <td>K</td>
            <td>L</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4">備註</td>
        </tr>
    </tfoot>  
</table>                   
```
> rowspan 列合併
> colspan 欄合併
## 表單
```html
<form action="" method="">
    <input type="text" name="user">
    <input type="password" name="pw">
    <input type="submit" value="登入">
</form>
```
> action: 表單執行的頁面
> method: 表單傳遞的方法，有post與get兩種。
### 常用input
```html
    <input type="text" name="user">
    <input type="password" name="pw">
    <input type="radio" name="gender" value="male">男
    <input type="radio" name="gender" value="female">女
    <input type="radio" name="gender" value="unknown">未知
    <input type="checkbox" name="hobby">吃
    <input type="checkbox" name="hobby">喝
    <input type="checkbox" name="hobby">玩
    <input type="checkbox" name="hobby">樂
```
### html5新增input
```html
    <input type="email">
    <input type="number" max="10" min="1">
    <input type="date">
```
### 下拉式選單
```html
<select name="edu">
    <option value="國小">國小</option>
    <option value="國中">國中</option>
    <option value="高中職">高中職</option>
    <option value="大專院校">大專院校</option>
</select>
```
### 按鈕
```html
<input type="submit" value="送出">
<input type="button" value="自定義">
<input type="reset">
<button type="submit">送出</button>
<button type="button">自定義</button>
<button type="reset">重設</button>
```
### label標籤
```html
<label for="user">帳號</label>
<input type="text" id="user">

<!-- radio -->
<label for="male">男
    <input type="radio" name="gender" value="male" id="male">
</label>
<label for="female">女
    <input type="radio" name="gender" value="female" id="female">
</label>
```
## HTML5 語意標籤
```html
<nav></nav>
<header></header>
<footer></footer>

<section></section>
<article></article>

<aside></aside>

<main></main>

<figure>
    <img src="#" alt="#">
    <figcaption></figcaption>
</figure>
```
### picture
```html
<picture>
    <source srcset="https://picsum.photos/id/34/800" media="(min-width:800px)"> 
    <source srcset="https://picsum.photos/id/39/600" media="(min-width:600px)"> 
    <img src="https://picsum.photos/id/14/300" alt="">
</picture>
```
## 圖片網站
### visual hunt
- https://visualhunt.com/

### unsplash
- https://unsplash.com/
- http://source.unsplash.com

### picsum photos
- https://picsum.photos/

- https://picsum.photos/600
- https://picsum.photos/800/600
- https://picsum.photos/id/34/800/
- https://picsum.photos/id/34/800/600
- https://picsum.photos/200/300?grayscale
- https://picsum.photos/200/300/?blur
- https://picsum.photos/200/300/?blur=4
- https://picsum.photos/200/300?random=1


### placeholder
- https://placeholder.com/

## 區塊與行內
### 區塊元素
div,h1,h2,h3,h4,h5,h6,p,ul,ol,li,dl,dt,dd,header,footer,nav,main,aside,section,article,figure
### 行內元素
span,a,img,b,i,small,em,strong,sup,sub,del,u

# CSS
## CSS分類
### 嵌入式樣式
```html
<h1 style="color:red;">Title</h1>
```
### 內部樣式
```html
<head>
	<title>標題</title>
	<style>
		h1 {
			color: red;
		}
	</style>
</head>
```
### 外部樣式表
```html
<head>
	<title>標題</title>
	<link rel="stylesheet" href="style.css">
	<style>
		@import url("style.css");
	</style>
</head>
```
## 選取器
### 標籤 tag
```css
p {
	color: red;
}
```
### 類別 class
使用點開頭命名，可重複使用
```css
.abc {
	color: blue;
}
```
### ID
使用#開頭，不可重複使用
```css
#xyz {
	color: yellow;
}
```
### 萬用選取器 * 
預設套用在網頁的所有元素
```css
* {
	font-family: "Segoe UI";
}
```
## CSS 權重
當CSS發生衝突時，CSS會以權重去做區分。CSS影響的範圍愈小，權重就越重，權重越重，優先順序越高。
在預設的狀態下，權重大小：ID > CLASS > TAG
## CSS 文字相關樣式 
### color --- 文字顏色

>快速鍵 c

```css
h1 {
    color: red;                /*色彩名稱*/
    color: rgb(255,0,0);       /*RGB色碼*/
    color: rgba(255,0,0,.5);   /*RGBA色碼*/
    color: #ff0000;            /*16進位*/
    color: #f00;               /*16進位縮寫*/
    color: hsl(112, 80%, 36%)  /*色相飽和度明度*/
}
```
>16進位算法
rgb(30,0,200)
30 / 16 = 1...14
0 / 16 = 0...0
200 / 16 = 12...8
#商餘商餘商餘
如果遇到十位數就轉換為A，所以16進位的16個分別為
0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F
rgb(30,0,200) => #1E00C8
***
### text-align --- 文字對齊

>快速鍵:ta

*  left
* center
* right
* justify
***
### text-decoration --- 文字裝飾

>快速鍵:td

* none
* underline
* overline
* line-through
***
### font-size --- 字體大小

> 快速鍵:fz
>
單位:
* px
* em
* rem

> em 與 rem 的差別
> em 的比例是依循最靠近的父元素；rem 的比例是依循根的比例。假設父元素是 24px，子元素是 1.6em，最後的大小就是 24 x 1.6；若子元素是1.6rem，則還是維持 16 x 1.6。
***
### font-family --- 字體種類

>快速鍵:ff

```css
font-family: "字體名稱" ;
```
常用預設字體
* Arial
* tahoma
* verdana
* gill sans mt
* segoe ui
除了使用預設的字體以外，也可以使用 Google 網路字體(Web Font)。
[Google Fonts](https://fonts.google.com/)
***
### font-weight --- 粗體字

>快速鍵:fw
* bold
* 100-900
* normal
***
###  font-style --- 斜體字
>快速鍵:fs
* italic
* normal

***
### letter-spacing --- 字元間距
>快速鍵:ls
字元之間的距離。
***
### word-spacing --- 文字間距
>快速鍵:wos
英文單字之間的距離，中文無效
***
### line-height --- 行高
>快速鍵:lh
行與行之間的距離，文字會在行高的正中間
***
### text-transform --- 文字變形
文字變形。指的是文字大小寫。
>快速鍵:tt 
* uppercase
* lowercase
* capitalize
***
### font-variant
小型大寫字母
>快速鍵:fv

***
***
## CSS背景相關樣式 
### background-color背景色

> 快速鍵: bgc
> 
```css
background-color: 色碼 ;
```
### background-image 背景圖片或漸層

> 快速鍵: bgi
> 
* url() - 圖片
```css
background-image: url("圖片位置") ;
```
* linear-gradient() - 線性漸層
```css
background-image: linear-gradient(to right, red 30%,blue 40%, yellow 50%, green 60% );
```
* repeating-linear-gradient() - 線性重複漸層
```css
background-image: repeating-linear-gradient(45deg,transparent 0px,transparent 10px,blue 10px,blue 20px); 
```
* radial-gradient() - 放射性漸層
```css
background-image: radial-gradient(red 30%,blue 30%,blue 40%,yellow 40%, yellow 50%,green 50% );
```
* repeating-radial-gradient() - 放射性重複漸層
```css

```
***
### background-repeat背景的重複方式

> 快速鍵: bgr
> 
* repeat - 完全重複
* repeat-x - x軸重複
* repeat-y - y軸重複
* no-repeat - 不重複

```css
background-repeat: repeat ;
```
***
### background-position背景的位置

> 快速鍵: bgp
> 
```css
background-position: 100px 50px ;
/*背景水平偏移100px，垂直偏移50px*/
```
除了用數值表示，也可以使用方位
* top
* bottom
* center
* left
* right
```css
background-position: right top;
/*背景靠右上*/
```
***
### background-attachment背景固定方式

> 快速鍵: bga
> 
* scroll - 捲動
* fixed - 固定

```css
background-attachment: fixed ;
```
***
### background-size背景的大小

>快速鍵: bgz
> 
* contain - 等比例符合內容
* cover - 等比例填滿內容
***
***
## 清單相關樣式
### list-style---清單樣式
* none
* disc
* circle
* square
* decimal
* upper-alpha
* lower-alpha
* upper-roman
* lower-roman
* cjk-ideographic
* hiragana
* katakana
* lower-greek
* armenian
* georgian
* hebrew
***
***
## 排版相關
### width ---寬度
元素寬度
### height--- 高度
元素高度。
> 若要讓高度可以滿版，有以下兩種做法
```css
/*作法一*/
html,body {
	height: 100%;
}
.box {
	height: 100%;
}
/*作法二*/
.box {
	height: 100vh;
}
```
***
### border--- 邊框
```css
border:color style width;/*順序可交換*/

border-left:color style width;
border-right:color style width;
border-top:color style width;
border-bottom:color style width;

border-left-color: color;
border-right-color: color;
border-top-color: color;
border-bottom-color: color;

border-left-width: width;
border-right-width: width;
border-top-width:width;
border-bottom-width: width;

border-left-style:style;
border-right-style:style;
border-top-style:style;
border-bottom-style:style;
```
可使用的樣式-style
* solid
* double
* dotted
* dashed
* inset
* outset
* groove
* ridge

***
### padding ---內距
邊框到內容之間的距離
* padding-left
* padding-right
* padding-top
* padding-bottom
* padding
***
### margin--- 外距
邊框以外到下一個元素之間的距離
* margin-left
* margin-right
* margin-top
* margin-bottom
* margin
***
### 縮寫(僅margin、padding有效):
在margin與padding中可使用縮寫的方式設定不同位置的距離。

```css
margin:10px;                /*上下左右*/
margin:10px 30px;           /*上下10px,左右30px*/
margin:10px 30px 0px;       /*上10px,左右30px,下0px*/
margin:10px 30px 0px 20px;  /*上10px,右30px,下0px,左20px*/
```
***
### block與inline的差異
#### block
1. block永遠都會往下換行，如果有設定寬度，右方空缺的部分會由margin自動填滿；如果沒有設定寬度，則寬度會視為100%
2. 在block元素中，width、height、margin、padding、border都有作用
#### inline
1. 內容有多少，範圍就有多少
2. width、height、margin-top、margin-bottom沒有作用
3. padding-top、padding-bottom、border-top、border-bottom看的見效果，但不影響實際空間

> 基本上只要是行內元素，就不建議使用width,height,border,margin,padding這些屬性，如果要使用就轉換成block或是inline-block之類的其他模式
> 
### display --- 轉換元素
* block
* inline
* inline-block
* table
* table-cell
* table-row
* flex
* inline-flex
* grid
### position --- 定位
* Static 靜態定位
* Relative 相對定位
* Absolute 絕對定位
* Fixed 固定定位
* Sticky 黏性定位

## 補充網站
* [Color Hunt](https://colorhunt.co/)
* [Coolors](https://coolors.co/)
* [Nippon Colors](https://nipponcolors.com/)
* [Google Fonts](https://fonts.google.com/)
* [華康 web Fonts](https://dfo.dynacw.com.tw/about/about_webfont.aspx)
* [文鼎雲字庫](https://www.ifontcloud.com/index/index.jsp)
* [Just Font](https://justfont.com/)
* [CanIUse](https://caniuse.com/)
* [Gradient](https://www.grabient.com/)
* [WebGradients](https://webgradients.com/)
* [CoolHue](https://webkul.github.io/coolhue/)
* [Css Gradients Pattern](http://projects.verou.me/css3patterns/)