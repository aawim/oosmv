<?php
if(!empty($products ))  
{ 
    $count = 1;
    $outputhead = '';
    $outputbody = '';  
    $outputtail ='';
    $outputhead .= '<div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Brand</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                ';
                  
    foreach ($products as $post)    
    {   
    //$body = substr(strip_tags($post->body),0,50)."...";
    $show = route('item.show', $post->id);
    $outputbody .=  ' 
                
                            <tr> 
		                        <td>'.$count++.'</td>
		                        <td style="width:200px">'.$post->name.'</td>
		                        <td style="width:200px"><img src="'.url('/').'/'.$post->image.'" width=150px></td>
                                <td>'.$post->price.'</td>
                                <td>'.$post->brand->name.'</td>
                                <td><a href="'.$show.'" target="_blank" title="SHOW" ><span class="glyphicon glyphicon-list"></span></a></td>
                            </tr> 
                    ';
                
    }  

    $outputtail .= ' 
                        </tbody>
                    </table>
                </div>';
         
    echo $outputhead; 
    echo $outputbody; 
    echo $outputtail; 
 }  
 
 else  
 {  
    echo 'Data Not Found';  
 } 
 ?>  