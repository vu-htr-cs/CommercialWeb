<?php 
class ProductModel extends BaseModel{
    Const TABLE="tbl_sanpham";
    public function getAll($select=['*'],$orderBy=[],$limit=100){
        return $this->all(self::TABLE,$select,$orderBy,$limit);
    }
    public function findbyID($id){
        return $this->find(self::TABLE,$id);
    }
    public function deleteData($id){
        return $this->delete(self::TABLE,$id);
    }
    public function store($data){
        $this->create(self::TABLE,$data);
    }
    public function updateData($id,$data){
        $this->update(self::TABLE,$id,$data);
    }

       //Phuong thuc Khac//
    public function getCatorgyofProduct($id){
       $sql="select * from tbl_danhmuc where id_danhmuc=".$id;
       $data=$this->getByQuery($sql);
       return $data;


    }
    public function getDetail($id){
        $sql="select tbl_sanpham.*,tbl_chitietsanpham.tacgia as tacgia,tbl_chitietsanpham.url1 as url1,tbl_chitietsanpham.url2 as url2,tbl_chitietsanpham.url3 as url3,tbl_chitietsanpham.url4 as url4 from ".self::TABLE." inner join tbl_chitietsanpham on tbl_chitietsanpham.id_chitietsp=tbl_sanpham.id_chitietsp where tbl_sanpham.id_sanpham=${id}";
     
        return $this->getByQuery($sql);
    }
    public function getRelativeProduct($id,$iddm){
        $sql="select tbl_sanpham.ten_sanpham,tbl_sanpham.gia,tbl_chitietsanpham.tacgia as tacgia,tbl_sanpham.url,tbl_chitietsanpham.url1 as url1 from ".self::TABLE." inner join tbl_chitietsanpham on tbl_chitietsanpham.id_chitietsp=tbl_sanpham.id_chitietsp where id_sanpham not in(".$id.") and id_danhmuc=".$iddm." limit 0,8";
        $data=$this->getByQuery($sql);
        return $data;

    
    }
    public function findonkeyword($keyword){
        return $this->findbyKeyword(self::TABLE,'ten_sanpham',$keyword);
    }

    public function AddaProduct($id,$ten,$iddm,$gia,$url,$mota){
        $sql="insert into tbl_sanpham values(".mysqli_real_escape_string($this->connect,$id).",'".$ten."','".mysqli_real_escape_string($this->connect,$url)."','".mysqli_real_escape_string($this->connect,$mota)."',".mysqli_real_escape_string($this->connect,$gia).",".mysqli_real_escape_string($this->connect,$iddm).",".mysqli_real_escape_string($this->connect,$id).")";
        $this->_query($sql);

    }
    public function modifyProduct($id,$tacgia,$url1,$url2,$url3,$url4,$isHot){
        $sql="update ";
        $this->updatebyKey('tbl_chitietsanpham','id_chitietsp',['tacgia'=>$tacgia,'url1'=>$url1,'url2'=>$url2,'url3'=>$url3,'url4'=>$url4,'isHot'=>$isHot],$id);
        
    }
    public function addcmt($cmt,$username,$idsp){
        $sql="insert into tbl_binhluan values(NULL,".$idsp.",'".$username."','".$cmt."','".date("y-m-d",time())."')";
        $this->_query($sql);
    }
    public function getcmt($idsp){
        $sql="select * from tbl_binhluan where id_sanpham=".$idsp." order by postId desc";
       
        return
              $this->getByQuery($sql);
 
    }
        
    

}