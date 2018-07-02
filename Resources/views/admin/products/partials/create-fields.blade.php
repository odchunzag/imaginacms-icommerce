@php
	$op = array('required' => 'required');
	$opQuantity = array('min' => 0);
	$opPrice = array('step' => '0.01','min' => 0);
	$opFloat = array('step' => '0.01','min' => 0);
	$opMinimum = array('min' => 1);
@endphp

<div class="box-body row">

	@if ($entity->translationEnabled())
		<input type="hidden" name="locale" value={{App::getLocale()}}>
	@endif

	<div class="col-xs-8 column-left">

			@include('icommerce::admin.products.partials.flag-icon',['entity' => $entity,'att' => 'title'])

			{!! Form::normalInput('title',trans('icommerce::products.table.title'), $errors,null,$op) !!}

			{!! Form::normalInput('slug','Slug', $errors) !!}

			@include('icommerce::admin.products.partials.flag-icon',['entity' => $entity,'att' => 'summary'])

			<div class="form-group">
			  <label for="summary">{{trans('icommerce::products.table.summary')}}</label>
			  <textarea class="form-control" rows="5" id="summary" name="summary"></textarea>
			</div>

			@include('icommerce::admin.products.partials.flag-icon',['entity' => $entity,'att' => 'description'])

			{!! Form:: normalTextarea('description', trans('icommerce::products.table.description'), $errors,null,$op) !!} 

	</div>

	<div class="col-xs-4 column-right">

		<div class="form-group">
			<label for="status">Status</label>
			<select class="form-control" id="status" name="status">
				@foreach ($status->lists() as $index => $ts)
					<option value="{{$index}}" @if($index==0) selected @endif >{{$ts}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">

			<label for="status">{{trans('icommerce::products.table.principal category')}}</label>

			<select class="form-control" id="category_id" name="category_id" required>
				@if(count($categories)>0)
					@foreach ($categories as $index => $cat)
						<option value="{{$cat->id}}">{{$cat->title}}</option>
					@endforeach
				@endif
			</select>
		</div>

		<div class="row checkbox">

			<div class="col-xs-12">
			<div class="content-cat" style="max-height:490px;overflow-y: auto;">

			<label for="categories"><strong>{{trans('icommerce::products.table.categories')}}</strong></label>

			@if(count($categories)>0)

	        <ul class="checkbox" style="list-style: none;padding-left: 5px;">
	        @foreach ($categories as $category)

	                  @if($category->parent_id==0)

	                  <li>
		                  <label>
		                    <input type="checkbox" class="flat-blue jsInherit" name="categories[]"
		                      value="{{$category->id}}"> {{$category->title}}
		                  </label>

		                  	@if(count($category->children)>0)
		                  	<ul style="list-style: none;">
		                   	@foreach ($category->children as $x => $child) 
                    			<li>

                    				 <label><input type="checkbox" class="flat-blue jsInherit" name="categories[]"

		                      value="{{$child->id}}"> {{$child->title}}</label>

                    			</li>
                			@endforeach
                			</ul>
                			@endif

	                   </li>
	                  @endif
	               
	        @endforeach

	        @endif

	        </ul>

	        </div>
	        </div>

	    </div>

	</div>

	<div class="col-xs-12 column-extra">

		<ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#menu1">{{trans('icommerce::products.table.data')}}</a></li>
		  <li><a data-toggle="tab" href="#menu2">{{trans('icommerce::products.table.links')}}</a></li>
		  <li><a data-toggle="tab" href="#menu3">{{trans('icommerce::products.table.images')}}</a></li>
		  <li><a data-toggle="tab" href="#menu4">{{trans('icommerce::products.table.options')}}</a></li>
		  <li><a data-toggle="tab" href="#menu5">{{trans('icommerce::products.table.discount')}}</a></li>
		   <li><a data-toggle="tab" href="#menu6">{{trans('icommerce::products.table.files')}}</a></li>
		   <li><a data-toggle="tab" href="#menu7">{{trans('icommerce::products.table.subproducts')}}</a></li>
		   <li><a data-toggle="tab" href="#menu8">{{trans('icommerce::products.table.additional')}}</a></li>
		</ul>

		<div class="tab-content">

		  <div id="menu1" class="tab-pane fade in active">
		  	<div class="col-xs-12">
		  		<br>
		  		 @include('icommerce::admin.products.tabs.create.data')
		  	</div>
		  </div>

		  <div id="menu2" class="tab-pane fade">
		   	<div class="col-xs-12">
		   		<br>
		  		@include('icommerce::admin.products.tabs.create.links')
		  	</div>
		  </div>

		  <div id="menu3" class="tab-pane fade">
		  	<div class="col-xs-12">
		  		<br>
		  		@include('icommerce::admin.products.tabs.create.images')
		  	</div>
		  </div>

		  <div id="menu4" class="tab-pane fade">
		  	<div class="col-xs-12">
		  		<br>
		  		@include('icommerce::admin.products.tabs.create.options')
		  	</div>
		  </div>

		  <div id="menu5" class="tab-pane fade">
		  	<div class="col-xs-12">
		  		<br>
		  		@include('icommerce::admin.products.tabs.create.discount')
		  	</div>
		  </div>

		   <div id="menu6" class="tab-pane fade">
		  	<div class="col-xs-12">
		  		<br>
		  	 	@include('icommerce::admin.products.tabs.create.files')
		  	</div>
		  </div>

		  <div id="menu7" class="tab-pane fade">
		  	<div class="col-xs-12">
		  		<br>
		  	 	@include('icommerce::admin.products.tabs.create.subproducts')
		  	</div>
		  </div>

		  <div id="menu8" class="tab-pane fade">
		  	<div class="col-xs-12">
		  		<br>
		  	 	@include('icommerce::admin.products.tabs.create.additional')
		  	</div>
		  </div>

		</div>

	</div>

</div>