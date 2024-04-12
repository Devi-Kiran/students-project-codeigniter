<div class="col-3">
    <div class="list-group">
      <button type="button" class="list-group-item list-group-item-action active">
        Link 1
      </button>

      <?php for($i = 2; $i <= 10; $i++): ?>
        <button type="button" class="list-group-item list-group-item-action">Link <?= $i?></button>
      <?php endfor; ?>
    </div>
</div>