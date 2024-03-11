<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card">
					  <div class="card-header bg-primary">
					     Cadastro de Produto
					  </div>
						<div class="card-body">
                            <form action="views/produtos/product.php" method="POST">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Descriçao </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="productDescription">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Código Interno </label>
                                        <input type="text" class="form-control"  placeholder1="Nome do Produto" name="productCode" id="internalCode">
                                        </div>
                                    </div>
                                   
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Código de Barras (EAN) </label>
                                        <input type="text" class="form-control" placeholder1="Nome do Produto" name="productBarcode" id="barcode">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Preço de Compra </label>
                                        <input type="text" class="form-control" placeholder1="Nome do Produto" name="productBuyPrice" id="price1">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Preço de Venda </label>
                                        <input type="text" class="form-control" placeholder1="Nome do Produto" name="productSalePrice" id="price2">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Estoque </label>
                                        <input type="text" class="form-control" placeholder1="Nome do Produto" name="productInventory" id="stock">
                                        </div>
                                    </div>

                                    <input type="hidden" name="action" value="insert">

                                    <div class="col-12 mt-3">
                                        <p class="text-end">
                                            <button class="btn btn-outline-success">
                                                <span class="iconify" data-icon="material-symbols:save-sharp" style="color: #198754;"></span>
                                                Salvar Dados
                                            </button>
                                        </p>
                                    </div>
                                </div>
                            </form>
						</div>
					</div>				
				</div>
			</div>
		</div>