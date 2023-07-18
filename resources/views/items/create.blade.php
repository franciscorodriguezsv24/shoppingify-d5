
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Add a new item</h5>
      <button type="button" class="btn-close " data-bs-dismiss="offcanvas" aria-label="Close"><svg class="close"xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20"><style>.close{fill: black}</style><path d="m249-207-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></button>
    </div>
    <div class="offcanvas-body">
        
<div class="mb-6">
<form>
  <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
  <input type="text" id="large-input" name="name" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
</div>
<div class="mb-6">
  <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 ">Note (optional)</label>
  <input type="text" id="base-input" name="note" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
</div>
<div class="mb-6">
  <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 ">Image (optional)</label>
  <input type="file" id="small-input" name="image" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500   placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
</div>
<div class="mb-6">
  <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Category</label>
  @include("items.create");
  <select id="countries" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
    @foreach ($categorias as $categoria)
        <option value="{{$categoria->name}}">{{$categoria->name}}</option>
    @endforeach
  </select>
</div>   
<div class="flex flex-row gap-3 justify-center">
  <button type="submit" class="text-black hover:border-2 hover:border-orange-500 rounded-md p-2">cancel</button>
  <button class="bg-orange-500 text-white p-2 rounded-md ">save</button>
</div>
</form>
</div>


    </div>
  </div>
</div>