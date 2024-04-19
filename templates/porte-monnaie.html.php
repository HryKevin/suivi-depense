<div class="container-index">

    <nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/?page=index">BudgetBuddy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                </li>
            </ul>
        
            </div>
        </div>
    </nav>


     <div class="container">
        <h1 class="mt-5 mb-4">Suivi de dépenses</h1>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Montant</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="expenses-list">
                        <!-- Les lignes de dépenses seront ajoutées dynamiquement ici -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="text-end">Total :</td>
                            <td id="total">0</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="input-group mb-3">
                    <input type="text" id="description" class="form-control" placeholder="Description">
                    <input type="number" id="amount" class="form-control" placeholder="Montant">
                    <button class="btn btn-primary" id="add-expense">Ajouter</button>
                </div>
            </div>
        </div>
    </div>

</div>


</div>