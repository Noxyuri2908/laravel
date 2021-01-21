<a href = "{{ route('user') }}"> USER </a>   |
<a href = "/product"> PRODUCT </a>  |
<a href = "/catog"> CATOG </a>  |

</hr>
<ul>
    <li><a href="/product/100/catog/10">product 1 </a></li>
    <li><a href="/product/200/catog/20">product 2 </a></li>
</ul>

</hr>
<h2>The name of route in laravel framework</h2>
<ul>
	<li><a href="{{ route('user') }}">User</a></li>
	<li><a href="{{ route('user') }}">User</a></li>
</ul>

</hr>
<h2>the route name with parameter</h2>
<ul>
	<li><a href="{{ route('catog.show', ['id' => 1]) }}">detailed catog</a></li>
	<li><a href="{{ route('catog.show', ['id' => 2]) }}">detailed catog</a></li>
</ul>

</hr>
<h2>the route name with some parameters</h2>
<ul>
	<li><a href="{{ route('subCatog.show.catog', ['id' => 1,'catogID' => '21']) }}">detailed subCatog</a></li>
	<li><a href="{{ route('subCatog.show.catog', ['id' => 3,'catogID' => '21']) }}">detailed subCatog</a></li>
</ul>

</hr>
<h2>the group of route</h2>
<ul>
	<li><a href="{{ route('backend.user.index') }}">User managerment</a></li>
	<li><a href="{{ route('backend.product') }}">Product managerment</a></li>
	<li><a href="{{ route('backend.catog') }}">Catog managerment</a></li>
	<li><a href="{{ route('backend.subCatog') }}">subCatog managerment</a></li>
</ul>