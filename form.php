
<div class="container">

<h2 class="text text-center text-primary mt-4">WEB CALCULATE</h2>
<br>
    <div class="row">
        <div class="col-3"> </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                            <label for="name">First name</label>
                                <input type="number" class="form-control" name="add" >
                            </div>
                            <div class="form-group">
                               <label for="">Select Option</label>
                               <select name="calulate" id="" class="form-control">
                                    <option value="0">None</option>
                                     <option value="add">Add</option>
                                    <option value="divide">Divide</option>
                                    <option value="minus">Minus</option>
                                    <option value="multiple">Multiple</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="">Secound Number</label>
                                <input type="number" class="form-control" name="calculate" >
                            </div>
                            <div class="form-group">
                                <button  type="submit" class="btn-danger btn-sm flaot" name="btn-cal">Calculate</button>
                            </div>
                        </form>
                    </div>

                    <div class="class-footer">
                    <br><?php include "cal.php";?></br>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
   
</div>