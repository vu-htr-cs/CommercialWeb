

<div class="header-wrapper bach">
    <div class="container-fluid ">
            <div class="row ">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-left">
                    <div class="content-header">
                        <div class="grouplogo">
                            <a href="index.php">  <img src="./public/images/lgo.webp" alt="Logo Nhom" style=" width:158px; height:40px;"> </a> 
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 header-center">
                  
                  <form action="index.php?controller=search&action=searchByKeyword" method="POST">
                    <div class="searchbox">
                      <input type="text" value name="keyword" placeholder="Nhập từ khóa">
                      <div class="result-search-products-content" style="display:none">
                      <ul class="result-search-products" style="display:none"></ul>             
                    </button> 
                    </div> 
                    <button id="searchsubmit2"  type="submit">
                    <i class="fas fa-search"></i>
                    </button> 
                    </div>
                  </form>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-right">
                    <div class="header-menu">         
                            <ul class="main-menu">
                                <li class="menu-item active">
                                    <a href="index.php?controller=account">
                                        <div class="iconneedborder"> <i class="fas fa-user"></i> </div> 
                                        <span class="menu-item-text"> 
                                            <?php if(isset($_SESSION['username'])){echo "Tài Khoản";} 
                                        else {echo"Đăng Nhập";}  ?> </span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="index.php?controller=cart">
                                    <div class="iconneedborder"> <i class="fas fa-shopping-cart"></i> </div>
                                        <span class="menu-item-text" > Giỏ Hàng </span>
                                    </a>
                                </li>

                            </ul>                                                                                            
                    </div>
                </div>
            </div>

        </div>
    </div>



<link rel="stylesheet" href="./public/css/detailproduct.css">

<div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" style="color:black">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="index.php?controller=search&action=searchByFilter&iddm=<?= $category[0]['id_danhmuc'] ?>" style="color:black"><?= $category[0]['ten_danhmuc'] ?> </a></li>

                <li class="breadcrumb-item active" aria-current="page"> <?= $detailproduct[0]['ten_sanpham'] ?> </li>
            </ol>
</div>

        <div class="page-body">
            <div class="container-fluid">
                <div class="row book-infor-part1">
                <div class="col-lg-6 col-md-12 col-sm-12 book-img">
                    <div class="row big-img">
                        <div class="col-12">
                        <img src="./public/images/product/<?= $detailproduct[0]['url']?>.jpg" alt="tittle" class="book-bt" id="book-cover">
                        </div>
                    </div>
                    <div class="row small-img">
                        <div class="col-12">
                            <ul class="a-thumbs">
                                <li class="thumbs"><img class="book-cover-child" src="./public/images/product/<?= $detailproduct[0]['url1']?>.jpg" class="thumb-img" height="135px" width="100x" > </li>
                                <li class="thumbs"><img class="book-cover-child" src="./public/images/product/<?= $detailproduct[0]['url2']?>.jpg" class="thumb-img" height="135px" width="100x" ></li>
                                <li class="thumbs"><img class="book-cover-child" src="./public/images/product/<?= $detailproduct[0]['url3']?>.jpg" class="thumb-img" height="135px" width="100x" ></li>
                                <li class="thumbs"><img class="book-cover-child" src="./public/images/product/<?= $detailproduct[0]['url4']?>.jpg" class="thumb-img" height="135px" width="100x""></li>
                                
                            </ul>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 book-infor">
                    <div class="row" id="titlle">
                        <div class="col-12">
                        <h3><?= $detailproduct[0]['ten_sanpham']  ?></h3>
                        </div>
                    </div>

                    <div class="row" id="author">
                            <label>Tác giả:  <a href="#" style="color: brown;"> <?= $detailproduct[0]['tacgia']  ?> </a></label>
                    </div>

                    <hr>

                    <div class="row book-price">
                        <div class="col-lg-12 col-md-12 col-sm-12 price">
                            <div class="row type-name">
                                <h5><?php echo (($_GET['idsp']%2)==1?"Sách bìa cứng":"Sách bìa mềm"); ?> </h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-5">
                                    <h4><?= ($detailproduct[0]['gia']/1000).".000đ"  ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row price-inf">
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="price-type">
                                    <input type="button" class="btn-price" id="Hard-price" value="Bảng cứng">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="price-type">
                                    <input type="button" class="btn-price" id="Soft-price" value="Bảng mềm"> 
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="price-type">
                                    <input type="button" class="btn-price" id="Audio-price" value="Bảng ghi âm">  
                                </div>
                            </div>
                        </div>

                        <hr style="width: 95% !important; margin-left: -2.5%;border: solid 0.7 px grey; ">

                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row ship-radio">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-check">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="optradio">
                                      Mua mặt hàng này và giao hàng miễn phí
                                    </label>
                                </div>
                                <div class=" col-lg-12 col-md-12 col-sm-12 form-check">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="optradio">
                                      Mua trực tuyến và nhận hàng tại cửa hàng
                                    </label>
                                    <a href="#">
                                        <p><i style="font-size: 13px; color: rgb(102, 102, 102);">Kiểm tra số lượng khả dụng ở cửa hàng gần nhất</i></p></a>
                                </div>
                            </div>
                        </div>

                        <hr style="width: 90% !important; margin-left: 0; border: solid 0.7 px grey; ">

                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <div class="row" style="margin-top: 25px;">
                                <div class="col-lg-1 col-sm-1 col-md-1">
                                    <a href="#" style="color: brown;">
                                        <i class="far fa-heart" style="font-size: 30px; padding-top: 5px;"></i>
                                    </a>
                                </div>
                                <div class="col-lg-5 col-sm-5 col-md-5">
                                   <a href="index.php?controller=cart&action=store&id=<?=$detailproduct[0]['id_sanpham'] ?>"> <input type="button" class="btn-added" value="Thêm vào giỏ hàng"> </a>
                                </div>
                                <div class="col-lg-5 col-sm-5 col-md-5">
                                    <input type="button" class="btn-buynow" value="Mua ngay">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row notice_product">
                        <p style="font-size: 12px; font-weight: lighter;">
                            Đơn hàng sẽ được xác nhận ngay sau 48 tiếng. <br>
                            Quý khách sẽ nhận được sách sau 7-9 ngày sau khi cửa hàng xác nhận đơn hàng.
                        </p>
                       
                    </div>
                </div>
                </div>
                <hr>
                

                <div class="row book-infor-part2">
                    <div class="col-lg-12 col-md-12 col-sm-12 tablist">
                    <ul class="nav nav-pills canit">
                    <li class="active"><a data-toggle="pill" href="#home" id="noneedfetch" > Tổng thể </a></li>
                    <li><a data-toggle="pill" href="#menu1" id="needfetch"> Đánh giá </a></li>
                    </ul> 
        
                
                <div class="tab-content">
                 
                <div id="home" class="tab-pane fade in active">
                <h5>Tổng quát</h5>
                <p class="text-tab"> Nội dung của cuốn sách <?=$detailproduct[0]['ten_sanpham'] ?>
                                    <br />
                                    Lý trí và Tình cảm (tiếng Anh: Sense and Sensibility) là một tiểu thuyết của nhà văn Anh Jane Austen. Được xuất bản năm 1811, nó là cuốn tiểu thuyết đầu tiên của Austen được xuất bản, dưới bút danh "A Lady."
                                    <br>
                                    Câu truyện xoay quanh Elinor và Marianne, hai người con gái của ông Dashwood với người vợ thứ hai. Họ có một người em gái, Margaret, và một người anh trai cùng cha khác mẹ tên là John. Khi người cha qua đời, tài sản của gia đình được trao lại cho John, và ba người con gái cùng với bà mẹ phải sống trong một hoàn cảnh không mấy dư dả. Họ tới ngôi nhà mới, một ngôi nhà ở nông thôn của một người họ hàng xa, nơi mà họ trải nghiệm cả tình yêu và nỗi buồn khi tình yêu tan vỡ. Tuy nhiên, cuối cùng Elinor và Marianne đều có được hạnh phúc.     
                                    </p>  

                </div>
                <div id="menu1" class="tab-pane fade">

                <div class="col-12 review">
                    <form action="<?php if(isset($_SESSION['username'])){
                        echo "index.php?controller=product&action=addcomment&name=".$_SESSION['username']."&idsp=".$detailproduct[0]['id_sanpham'];
                    }
                    else ""; ?>"  method="POST"> 
                    <div class="row myreview">
                        <?php if(isset($_SESSION['username'])): ?>
                        <div class="col-lg-10 col-sm-12 col-md-12">
                            <input type="text" class="form-control" placeholder="Viết đánh giá của bạn ở đây" name="comment">
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12">
                            <input class="btn btn-rv" type="submit" value="Send">
                        </div>
                        <?php else:?>
                           <h5 style="margin:0 auto; "> Vui lòng đăng nhập để bình luận </h5> 
                        <?php endif; ?>
                    </div>
                    </form>
                    <hr>
                    <label id="labelcmt">Những đánh giá khác</label>
                    <div id="commentcontent">

                    </div>                  
                    </div>
                    <div class="morerv">
                        <h6>
                            <a href="#">
                                MORE REVIEWS >>>>> 
                            </a>
                        </h6>
                    </div>
                </div>

                </div>
   
           </div>
        </div>

        <script defer>
        <?php if(isset($_GET['reload'])): ?>    

        document.querySelector(".book-infor-part2").addEventListener("click",()=>{
            // const bookif2=document.querySelector(".book-infor-part2");
            // const slcroods= bookif2.getBoundingClientRect();
            
            // const x=Number(slcroods.left + window.pageXOffset);
            // const y=Number(slcroods.top + window.pageYOffset+200);
            
            
            // window.scrollTo(x,y);
            document.querySelector(".book-infor-part2").scrollIntoView();
            
        })
       
        document.querySelector("#needfetch").dispatchEvent(new Event("click",{bubbles:true}));
        
        

        <?php endif; ?>
        </script>
                     

     </div>
                    
                
                </div>       
                <hr>

            </div>
        </div>

        <div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 productx" >
          <?php foreach ($listrelative as $item): ?>

            <div class="card dp" style="width: 12rem;">
                <div class='imgpro'>
                <img class="card-img-top" src="./public/images/product/<?= $item['url'] ?>.jpg" alt="Card image-home cap" style="height: 445px;" data-bia="./public/images/product/<?= $item['url1'] ?>.jpg" >
                <a href="#"> <button class="threeiconcart hidden"> <i style="color:black; font-size:16px" class="fas fa-shopping-cart"></i> </button> </a>
                <a href="#"> <button class="threeicon hidden"> <i style="color:black; font-size:16px" class="fas fa-search"></i> </button> </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?= $item['ten_sanpham'] ?></h5>
                  <p class="card-text" > <i >by:</i> <?= ucfirst($item['tacgia']) ?> <br> <span class="price" style="font-weight: bold; color:#969696;"><?= ($item['gia']/1000).".000₫" ?></span> </p>
                  
                </div>
              </div>

              <?php endforeach;?>
              <button class="slider_btn slider_btn--left">←</button>
              <button class="slider_btn slider_btn--right">→</button>
        </div>
    </div>

</div>

        <hr style="border: gray solid 0.5px; width: 95%; color: gray; margin-top: 50px; margin-bottom: 50px;">

<script src="./public/js/doihinhsp.js"></script>

<script src="./public/js/login.js"></script>

<script src="./public/js/pushpushofdetailp.js"></script>


<script>
    document.getElementById("needfetch").addEventListener("click",fetchapi());
    const content= document.querySelector("#commentcontent");
    function emitcomment(id){
        setInterval(() => {
            content.dispatchEvent(
            new CustomEvent(`cmtcuasp${id}`,{detail:'abc'}));
            
        }, 2000);
    }
    emitcomment(<?= $_GET['idsp'] ?>);
   
    content.addEventListener(`cmtcuasp<?= $_GET['idsp']?>`,()=>{
        
        fetchapi();
        
    });
   
    function fetchapi(){
        //  let http= new XMLHttpRequest();
        
        //  http.onreadystatechange = function () {
        //      if( this.readyState ==4 && this.status == 200){
        //          document.getElementById("content").innerHTML=this.responseText;
        //      }
        //  };
        //  http.open('GET','xuly.json',true);
        //  http.send();

        var postAPI='index.php?controller=product&action=getcomment&idsp=<?= $_GET['idsp'] ?>';
      
        fetch(postAPI)
        .then(respone=>respone.json())
        .then(post=> {
       var htmls= post.map(item=>{
           
           return ` <div class="row commentbox">
           <div class="col-lg-1 col-sm-1 col-md-1 voting">

           <input type="image" src="./public/images/hand-thumbs-up.svg"/>
                            <div class="counting-vote">
                              
                            </div>
                            <input type="image" src="./public/images/hand-thumbs-down.svg"/>

                       

           </div>
           
           <div class="col-lg-1 col-md-1 col-sm-2 readers">
               <img src="./public/images/avatar/${item.url}.jpg" alt="ava" class="ava">
           </div>
           <div class="col-lg-9 col-md-9 col-sm-9 comment-text">

               <div class="cmt-content">
                   <p> ${item.Body} </p>
               </div>
               <div class="cmt-time">
                   <i> Đăng ngày: ${item.time}</i> 
               </div>

           </div>


       </div>`;
      

       });

       htmls= htmls.join('');

       document.querySelector("#commentcontent").innerHTML=htmls;

        });
       }

       

</script>


                      

