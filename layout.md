# 網頁排版
## inline-block
行內區塊。讓元素保有行內與區塊的特性

### 產生的問題
#### inline-block之間會有一個約4像素間距
> 解決方式：將父元素的font-size設定為0，

#### 文字會消失
> 解決方式：將元素本體的font-size還原。若區塊中沒有文字需求可省略。

#### 預設的垂直對齊方式為baseline，區塊對齊在下方。
> 解決方式：設定vertical-align


## box-sizing
元素在預設的狀態時，總寬度=width+border+padding、總高度=height+border+padding，設定box-sizing之後不管padding與border設定多少，寬度依然保持原始的值
```css
* {
    box-sizing: border-box;
}
```

## vertical-align 垂直對齊
元素垂直對齊的方式，只對inline-block、table內元素有效

- baseline
- top
- middle
- bottom

## 區塊水平置中
預設狀態下，區塊右邊剩餘的空間都是margin，預設為margin-right: auto，在這邊auto可以視為自動填滿margin；若將margin-left設定為auto時，則變成左邊填滿，區塊就會移到右邊；左右同時設定auto，區塊就會置中。

## calc 運算
如果是有數值的屬性，皆可使用calc()做計算
```css
.container {
    width: calc(100% / 3);
    height: calc(100px + 50px);
}
```
> 在運算子的前後要加上空格，否則會造成解析錯誤

## float
文繞圖。讓區塊靠左或靠右浮動。
> 在float下方的區塊，文字會繞著float物件，但區塊本身會被壓在float物件下方，可使用clear清除。
### clear
清除元素對浮動的影響。
```css
.box {
    clear: left;
    /* left,right,both */
}
```
### 產生的問題
1. 當前方元素為浮動時，後方元素會受到影響
2. 當子元素都是浮動時，父元素高度會歸零（父元素崩蹋）
    - 解法一： 設定高度

    - 解法二： 設定overflow:auto到父元素
    ```css
    .container {
        overflow: auto;
    }
    ```
    - 解法三： 設定clearfix到父元素
    ```css 
    .clearfix::after {
        content:"";
        display: block;
        clear: both;
    }
    ```
    - 解法四： 設定display: flow-root到父元素
    ```css
    .container {
        display: flow-root;
    }
    ```
## 虛擬元素 before , after
在元素內的前方、後方產生一個虛擬的元素，產生的為行內元素，一定要加上content屬性。
```css
h1::before {
    content:"before";
}
h1::after {
    content:"after";
}
```
## Flex 彈性盒子
### display
```css
.container {
    display: flex;
}
```
### flex-flow
### flex-wrap 換行
### flex-direction 排列方向
```css
.container {
    display: flex;
    flex-wrap: wrap;
    /*
        no-wrap 不換行
        wrap    換行
        
    */
    flex-direction: row;
    /*
        row            橫排
        row-reverse    橫排反轉
        column         直排
        column-reverse 直排反轉
    */
}
```
### justify-content
```css
.container {
    display: flex;
    justify-content: center;
    /*
        flex-start     置左
        center         置中
        flex-end       置右
        space-around   分散對齊，每個區塊左右具有間距
        space-between  分散對齊，左右兩側區塊貼壁
        space-evenly   分散對齊，均分每個間距
    */
}
```
> space-evenly是後期加入的值，相容性差不建議使用

### align-items
```css
.container {
    display: flex;
    align-items: center;
    /*
        flex-start    置頂
        center        置中
        flex-end      置底
        stretch       拉伸
        baseline      文字基準線
    */
}
```
### flex-grow 元件伸展性
### flex-shrink 元件壓縮性
### flex-basis 元件基準值
### flex
```css
.box {
    flex: 0 0 calc(100% / 3);
    /* flex: flex-grow flex-shrink flex-basis */
}
```
### order 排序
```css
.box {
    order: 1
}
/* 數字愈小，排序愈前 */
```
