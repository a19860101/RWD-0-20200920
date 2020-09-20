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