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
## 分類
- 嵌入式
- 內部
- 外部

## 外部樣式表連結方式
```html
<link href="style.css" rel="stylesheet">
```
```css
@import url("style.css");
```

## 選取器
- tag
- class
- id
- *
