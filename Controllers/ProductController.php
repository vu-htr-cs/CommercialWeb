<?php 
class ProductController extends BaseController
{
    private $productModel;
    public function __construct()
    {
        $this->loadModel('ProductModel');
        $this->productModel= new ProductModel();
        
    }
    
    public function index(){
        $this->productModel->getAll(['id_sanpham'],['id_sanpham','desc']);
        return $this->view('frontend.products.index',['pagetitle'=> 'Trang danh sach san pham']);
    }
    // public function show(){
    //     $id=$_GET['id'];
    //     $result=$this->productModel->getDetail($id);
    //     echo "<pre>";
    //     print_r($result);
    // }
    // public function store(){
    //     $data=[ 
    //         'ten_sanpham'=>'localbrand','mota'=> 'thayhuan','gia'=>300,'id_danhmuc'=>102
    //     ];
    //     return $this->productModel->store($data);
    // }
    // public function update()
    // {   
    //     $data=[ 
    //         'ten_sanpham'=>'khabanh','mota'=> 'thichthehien','gia'=>0,'id_danhmuc'=>102
    //     ]; 
    //     $id=304;
    //     return $this->productModel->updateData($id,$data);
    // }
    // public function delete(){
    //     $id=$_GET['id'];
    //     return $this->productModel->deleteData($id);
    // }
    public function detailProduct(){
        $id=$_GET['idsp'];
        $detailProduct= $this->productModel->getDetail($id);
        
        $category=$this->productModel->getCatorgyofProduct($detailProduct[0]['id_danhmuc']);
        $listrelative=$this->productModel->getRelativeProduct($detailProduct[0]['id_sanpham'],$detailProduct[0]['id_danhmuc']);
      
       

        return $this->view('frontend.products.index',['detailproduct'=>$detailProduct,'category'=>$category,'listrelative'=>$listrelative]);
    }
    public function getComment(){
        $idsp=$_GET['idsp'];
        $listcmt=$this->productModel->getcmt($idsp);
        

        echo "[";
        function show($cmt){
             
            return '{ "postId":'.$cmt['postId'].',
                "id_sanpham" : '.$cmt['id_sanpham'].',
                "url":"'."ava".($cmt['name']).'",
                "Body":"'.$cmt['Body'].'",
                "time":"'.$cmt['time'].'"         
         }';           
        }

       $newlistcmt= array_map('show',array_values($listcmt));
       $newlistcmt=implode(',',$newlistcmt);
       echo $newlistcmt;
       echo "]";
    

    }
    public function addComment(){
        $cmt=$_POST['comment'];
        $username=$_GET['name'];
        $idsp=$_GET['idsp'];
        $this->productModel->addcmt($cmt,$username,$idsp);
        header('Location: index.php?controller=product&action=detailproduct&reload=done&idsp='.$idsp);

    }

 

}
?>