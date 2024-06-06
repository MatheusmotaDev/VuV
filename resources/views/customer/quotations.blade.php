<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acompanhar Cotações</title>
  <link href="/css/quotation.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Adicionei algumas regras de estilo para os status */
    .status-pending {
      color: yellow;
    }
    .status-accepted {
      color: green;
    }
    .status-recused {
      color: red;
    }
  </style>
</head>
<body>
 
  @include('customer.navbar')

  <div class="container">
    <h1 class="form-title text-center">Acompanhar Cotações</h1>
    
    @foreach($quotations as $quotation)
    <div class="card mt-4">
      <div class="card-header">
        Cotação #{{ $quotation->id }} - {{ $quotation->name }} <!-- Adicionando o título da cotação -->
      </div>
      <div class="card-body">
        <h5 class="card-title">Detalhes da Cotação</h5>
        <p class="card-text">Observações Gerais: <br> {{ $quotation->notes }}</p> <!-- Observações Gerais da Cotação -->
        <div class="text-end mt-3">
          <a href="{{ route('customer.quotations.items', $quotation->id) }}" class="btn btn-primary">Ver Itens</a> <!-- Botão para ver os itens -->
          <a href="#" class="btn btn-primary">Ver Propostas</a> <!-- Botão para ver propostas -->
        </div>
      </div>
      <div class="card-footer status-{{ $quotation->status }}">
        Status: {{ $quotation->status }}
      </div>
    </div>
    @endforeach

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>