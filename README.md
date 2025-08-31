# XML基础语法学习  

## 一.XML概述  

- **XML指的是，可扩展性标记语言**
- **XML被发明的目的是传输和存储数据，而不是展示数据**
- **XML的标签必须自定义，写标签时要有含义**  

XML语法：
[![pVifhSP.png](https://s21.ax1x.com/2025/06/07/pVifhSP.png)](https://imgse.com/i/pVifhSP)  

浏览器展示结果：
[![pVif4Qf.png](https://s21.ax1x.com/2025/06/07/pVif4Qf.png)](https://imgse.com/i/pVif4Qf)

**XML和HTML的不同：**

- ==HTML标签不能自定义，XML标签只能自定义==
- ==HTML语法要求不严格，XML语法要求极其严格，必须是成对标签==
- ==HTML用来展示数据，XML用来传输和存储数据==  

## 二.语法规则  

**1）XML必须有根节点；根节点就是其他所有节点的父级节点：**
[![pVioeCd.png](https://s21.ax1x.com/2025/06/07/pVioeCd.png)](https://imgse.com/i/pVioeCd)  

**2）XML头声明：不强制要求，可有可无，但建议写：**
[![pVFmFUK.png](https://s21.ax1x.com/2025/06/08/pVFmFUK.png)](https://imgse.com/i/pVFmFUK)  

**3）所有XML元素都必须是成对标签：**
[![pVFmQVP.png](https://s21.ax1x.com/2025/06/08/pVFmQVP.png)](https://imgse.com/i/pVFmQVP)  

**4）标签名大小写敏感（区分大小写）：**
[![pVFmUrn.png](https://s21.ax1x.com/2025/06/08/pVFmUrn.png)](https://imgse.com/i/pVFmUrn)  

**5）标签不能交叉编写：**
[![pVFm0aV.png](https://s21.ax1x.com/2025/06/08/pVFm0aV.png)](https://imgse.com/i/pVFm0aV)  

**6）注释：**
[![pVFmgM9.png](https://s21.ax1x.com/2025/06/08/pVFmgM9.png)](https://imgse.com/i/pVFmgM9)  

**7）特殊字符使用实体转义：**
[![pVFnnWF.png](https://s21.ax1x.com/2025/06/08/pVFnnWF.png)](https://imgse.com/i/pVFnnWF)  

|转义字符|符号|
|:---:|:---:|
|`&lt;`|<|
|`&gt;`|>|
|`&amp;`|&|
|`&apos；`|'|
|`&quot;`|"|

## 三.元素属性  

[![pVkOBOH.md.png](https://s21.ax1x.com/2025/06/12/pVkOBOH.md.png)](https://imgse.com/i/pVkOBOH)  

- **一个标签可以有多个属性，属性的值必须用引号引起来；**
- **命名规则：数字字母下划线，数字不能开头；**  


## 四.CDATA  

[![pVkOOpT.md.png](https://s21.ax1x.com/2025/06/12/pVkOOpT.md.png)](https://imgse.com/i/pVkOOpT)  

==注意：特殊字符较少时使用实体替换，较多时使用CDATA（CDATA必须大写）==  

## 五.使用PHP解析XML  

**1）PHP解析XML共分为3步：**  

**1. 读取XML文档存到内存**
**2. 形成DOM树**
**3. 由DOM树生成对象并返回**  

[![pVAMGFI.png](https://s21.ax1x.com/2025/06/13/pVAMGFI.png)](https://imgse.com/i/pVAMGFI)  

**2）SimpleXML类库**  
[![pVAMokR.png](https://s21.ax1x.com/2025/06/13/pVAMokR.png)](https://imgse.com/i/pVAMokR)  
[![pVAM579.png](https://s21.ax1x.com/2025/06/13/pVAM579.png)](https://imgse.com/i/pVAM579)  
[![pVAQcEd.png](https://s21.ax1x.com/2025/06/13/pVAQcEd.png)](https://imgse.com/i/pVAQcEd)  

**3）遍历XML数组**  
[![pVAlE26.png](https://s21.ax1x.com/2025/06/13/pVAlE26.png)](https://imgse.com/i/pVAlE26)  

**4）使用SimpleXML增加节点**  
[![pVMh55R.png](https://s21.ax1x.com/2025/07/08/pVMh55R.png)](https://imgse.com/i/pVMh55R)
