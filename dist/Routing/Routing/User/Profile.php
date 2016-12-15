<div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $_SESSION['name'] ;echo " ".$_SESSION['surname']; ?> </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
          
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Imię:</td>
                        <td><?php echo $_SESSION['name']; ?></td>
                      </tr>
					  
					   <tr>
                        <td>Nazwisko</td>
                        <td><?php echo $_SESSION['surname']; ?></td>
                      </tr>
					  
                      <tr>
                        <td>Data Rejstracji:</td>
                       <td><?php echo $_SESSION['register_date']; ?></td>
                      </tr>
                     
                   
                         <tr>
                       <tr>
                        <td>Liczba Projektów</td>
                        <td><?php echo $wynikall; ?></td>
                      </tr>
                    
                      <tr>
                        <td>Adres Email</td>
                        <td><?php echo $_SESSION['email']; ?> </td>
                      </tr>
                   
                      </tr>
                     
                    </tbody>
                  </table>
          
                </div>
              </div>
            </div>
              
            
          </div>
        </div>
      </div>
    </div>