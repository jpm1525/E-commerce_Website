			<form action="" method="post">
				<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>"/>
				<div class="mb-3 row">
        		    <!-----Search------------------------------------>
					<div class="col-6 col-md-3">
						<input type="text" class="form-control" placeholder="Search" aria-label="search" aria-describedby="basic-addon1" />
					</div>
					<div class="col-0 col-md-7 space"></div>
					<div class="col-6 col-md-2">
        		    <!-----Status Sort----------------------------------->
						<select class="form-select right" aria-label="Default select example">
							<option selected>Show all</option>
							<option value="1">Order in process</option>
							<option value="2">Shipped</option>
							<option value="3">Cancelled</option>
						</select>
					</div>
				</div>
			</form>
        	<!-----Order List----------------------------------->
			<div class="table-container">
				<table class="table table-light table-striped">
					<thead>
						<tr>
							<th class="col-1" scope="col-1">Order Id</th>
							<th class="col-2" scope="col-1">Name</th>
							<th class="col-1" scope="col-1">Date</th>
							<th class="col" scope="col-1">Billing Address</th>
							<th class="col-1" scope="col-1">Total</th>
							<th class="col-2" scope="col-1">Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href="../Admin/order_view.html">100</a></td>
							<td>Juan</td>
							<td>02/22/2023</td>
							<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium enim, qui,</td>
							<td>$5.00</td>
							<td>
							<form action="" method="post">
								<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>"/>
								<select class="form-select" aria-label="Default select example">
									<option value="1">Order in process</option>
									<option value="2">Shipped</option>
									<option value="3">Cancelled</option>
								</select>
							</form>
							</td>
						</tr>
						<tr>
							<td><a href="../Admin/order_view.html">100</a></td>
							<td>Juan</td>
							<td>02/22/2023</td>
							<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium enim, qui,</td>
							<td>$5.00</td>
							<td>
							<form action="" method="post">
								<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>"/>
								<select class="form-select" aria-label="Default select example">
									<option value="1">Order in process</option>
									<option value="2">Shipped</option>
									<option value="3">Cancelled</option>
								</select>
							</form>
							</td>
						</tr>
						<tr>
							<td><a href="../Admin/order_view.html">100</a></td>
							<td>Juan</td>
							<td>02/22/2023</td>
							<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium enim, qui,</td>
							<td>$5.00</td>
							<td>
							<form action="" method="post">
								<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>"/>
								<select class="form-select" aria-label="Default select example">
									<option value="1">Order in process</option>
									<option value="2">Shipped</option>
									<option value="3">Cancelled</option>
								</select>
							</form>
							</td>
						</tr>
						<tr>
							<td><a href="../Admin/order_view.html">100</a></td>
							<td>Juan</td>
							<td>02/22/2023</td>
							<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium enim, qui,</td>
							<td>$5.00</td>
							<td>
							<form action="" method="post">
								<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>"/>
								<select class="form-select" aria-label="Default select example">
									<option value="1">Order in process</option>
									<option value="2">Shipped</option>
									<option value="3">Cancelled</option>
								</select>
							</form>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
        	<!-----Pagination----------------------------------->
			<div class="mb-4 text-center">
				<a href="#">&larr;</a>
				<a href="#">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">6</a>
				<a href="#">7</a>
				<a href="#">8</a>
				<a href="#">9</a>
				<a href="#">10</a>
				<a href="#">&rarr;</a>
			</div>
