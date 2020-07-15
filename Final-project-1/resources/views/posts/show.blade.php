@extends ('layouts.app')

@section ('content')
<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="card mb-4">
                   	 <img src="/storage/{{$post->image}}" class="w-100" class="card-img-top">
						<div class="card-body">
                       		 <h5>نویسنده {{$post->user->username }} </h5>
							<p class="card-text">
                            {{$post->caption }}
                            <p>
								<a href="#" class="btn btn-info">ادامه مطلب</a>
				  		</div>
                    </div>
				</div>
			</div>
    
			
	
	<div class="row pt-3">
    <div class="col-md-12">
    <div class="card mb-4 ">
	<h4 class="card-header">
			نمایش نظرات
	</h4>
	<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									@include('partials.comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-md-12">
							
								<h4  >نظر دهید</h4>
							</div>
							</div>
							
							<form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="comment_body" class="form-control" />
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning" value="ارسال نظر" />
                        </div>
                    </form>
					
					</div>
	</div>
	</div></div></div>

</div>
@endsection
						<!-- <h5 class="card-header" >نظر دهید</h5>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="user">نام و نام خانواگی:</label>
										<input type="text" class="form-control" id="user">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="user">پست الکترونیک:</label>
										<input type="text" class="form-control" id="user">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="cmnt">نظر شما:</label>
								<textarea class="form-control" rows="5" id="cmnt"></textarea>
							</div>
							<button type="button" class="btn btn-info">ارسال نظر</button>
                        </div>
                        </div>
					</div> -->
					
					
                


