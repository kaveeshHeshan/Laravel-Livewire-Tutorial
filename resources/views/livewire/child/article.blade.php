<div>
    <div class="container my-5">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <h1>{{__('Article')}}</h1>
        <hr>
        <div class="d-flex flex-row">
            <div>
                <!-- Modal -->
                <!-- Add Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    {{__('Add Article')}}
                </button>
                
                <!-- Modal -->
                <div  wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click='closeModal' aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form wire:submit.prevent="saveArticle">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Article Title</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="title" placeholder="Enter title here....">
                                    <div class="error-block text-danger my-1" style="font-weight: 600; font-size: 14px;">@error('title') {{ $message }} @enderror</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label" aria-placeholder="Enter description here....">Article Content</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="description" rows="3"></textarea>
                                    <div class="error-block text-danger my-1" style="font-weight: 600; font-size: 14px;">@error('description') {{ $message }} @enderror</div>
                                </div>
                                <div class="my-3">
                                    <button type="submit" class="btn btn-success" type="submit">{{__('Save')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <h4>{{__('List of Articles')}}</h4>
            <hr>
            <div class="row">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">{{__('Title')}}</th>
                        <th scope="col">{{__('Description')}}</th>
                        <th scope="col">{{__('Action')}}</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if (count($articles) > 0)
                          @foreach ($articles as $article)
                            <tr>
                                <td>{{$article->title ?? '--'}}</td>
                                <td>{{$article->description ?? '--'}}</td>
                                <td>
                                        <!-- Edit Button trigger modal -->
                                        <button type="button" wire:click='edit({{$article->id}})' class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editArticleModal">
                                            {{__('Edit')}}
                                        </button>
                                        <button type="button" wire:click='delete({{$article->id}})' class="btn btn-danger" href="">{{__('Delete')}}</button>
                                </td>
                            </tr>
                          @endforeach
                      @else
                          
                      @endif
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
        
        <!-- Modal -->
        <div  wire:ignore.self class="modal fade" id="editArticleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editArticleModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Article</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click='closeModal' aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" wire:model="article_id">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Article Title</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" wire:model="title" placeholder="Enter title here....">
                        <div class="error-block text-danger my-1" style="font-weight: 600; font-size: 14px;">@error('title') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label" aria-placeholder="Enter description here....">Article Content</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="description" rows="3"></textarea>
                        <div class="error-block text-danger my-1" style="font-weight: 600; font-size: 14px;">@error('description') {{ $message }} @enderror</div>
                    </div>
                    <div class="my-3">
                        <button type="button" wire:click.prevent="updateArticle" class="btn btn-success" type="submit">{{__('Update')}}</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    
</div>
