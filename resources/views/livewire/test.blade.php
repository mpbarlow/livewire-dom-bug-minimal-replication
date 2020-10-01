<div>
  <span>{{ $page }}</span>
  of
  <span>2</span>
  <div>
    <button wire:click="toggle">@if ($page === 1) Click me @else And once more @endif</button>
  </div>
</div>
