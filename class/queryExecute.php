<?php
    class queryExecute
    {
        public function execute($conn,$query)
        {
            $result = mysqli_query($conn,$query);
            if($result)
            {
                return true;
            }
            else{
                return false;
            }
        }

        public function fetch($conn,$query)
        {
            $data = [];
            $result = mysqli_query($conn,$query);
            if($result ->num_rows >0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    $data[]=$row;
                }
            }
            return $data;
        }
    }
?>