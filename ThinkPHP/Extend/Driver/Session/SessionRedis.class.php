<?php 
//自定义REDIS 处理SESSION 驱动

Class SessionRedis{

    //REDIS连接对象
    private $redis;
    //SESSION有效时间
    private $expire;



    public function execute() {
        session_set_save_handler(
		                 array(&$this,"open"), 
                         array(&$this,"close"), 
                         array(&$this,"read"), 
                         array(&$this,"write"), 
                         array(&$this,"destroy"), 
                         array(&$this,"gc")
						 ); 
    }

	public function open($path,$name){
     $this->expire=C('SESSION_EXPIRE')?C('SESSION_EXPIRE') :ini_get('session.gc_maxlifetime');  
	 $this->redis=new Redis();
     return $this->redis->connect(C('REDIS_HOST'),C('REDIS_PORT'));
	}

    public function close(){
     return $this->redis->close();
    }
  
    public function read($id){
         $id=C('SESSION_PREFIX').$id;
         $data=$this->redis->get($id);
         return $data ? $data:'';

    }

    public function write($id,$data){
     $id=C('SESSION_PREFIX').$id;
     //$data=addslashes($data);
     return $this->redis->set($id,$data,$this->expire);


    }

    public function destroy($id){
       $id=C('SESSION_PREFIX').$id;
       return $this->redis->delete($id); 


    }

   public function gc($maxLeftTime){
     return true;
   }

}
?>
