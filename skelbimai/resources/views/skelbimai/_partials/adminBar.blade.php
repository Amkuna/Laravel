@auth
<div style="background-color: black; color: white;">
    <a href="/add-category" class="mr-2">Pridėti kategoriją</a>
    <a href="/add-ad" class="mr-2">Pridėti skelbimą</a>
    <a href="/manage-ads/" class="mr-2">Skelbimų valdymas</a>
    @if(Auth::id() === 1)
    <a href="/manage-categories" class="mr-2">Kategorijų valdymas</a>
    @endif
</div>
@endauth
