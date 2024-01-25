@extends('layouts.admin')

@section('title')
Edit Book
@endsection


@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Books</h1>
                <span class="h-20px border-gray-200 border-start mx-4"></span>
            </div>
            <div class="d-flex align-items-center py-1"></div>
        </div>
    </div>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="card mb-5 mb-xl-10">
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                    aria-controls="kt_account_profile_details">
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Edit Book</h3>
                    </div>
                </div>

                <div id="kt_account_settings_profile_details" class="collapse show">

                    <form class="form" action="{{route('admin.update-book')}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" value="{{$book->id}}" name="id">

                        <div class="card-body border-top p-9">
                            <div class="row mb-6">

                                {{-- row 1 --}}
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Stock No</span>
                                        </label>
                                        <input value="{{$book->stock_no}}" readonly type="text"
                                            class="form-control form-control-solid" placeholder="Enter Stock Number"
                                            name="stock_no">
                                        @error('stock_no')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Title</span>
                                        </label>
                                        <input value="{{ $book->title }}" type="text"
                                            class="form-control form-control-solid" placeholder="Enter Title"
                                            name="title">
                                        @error('title')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-71-3">
                                    <label class="required fs-6 fw-bold mb-2">Author</label>
                                    <select name="author"
                                        class="form-select form-select-solid select2-hidden-accessible"
                                        data-control="select2" data-hide-search="true"
                                        data-placeholder="Select a Team Member" data-select2-id="select2-data-71-3"
                                        tabindex="-1" aria-hidden="true">
                                        {{-- <option value="" data-select2-id="select2-data-3-x">Select Body Type...
                                        </option> --}}
                                        @foreach ($data->author as $row)
                                        <option @if($book->bookAuthor[0]->author_id==$row->id) {{'selected'}} @endif
                                            value="{{$row->id}}"
                                            data-select2-id="select2-data-3-{{$row->id}}">{{$row->author_name}}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('author')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>



                                {{-- row 2 --}}
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Price</span>
                                        </label>
                                        <input value="{{ $book->price }}" type="number"
                                            class="form-control form-control-solid" placeholder="Price" name="price">
                                        @error('price')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Stock Quantity</span>
                                        </label>
                                        <input value="{{ $book->stock_quantity }}" name="stock_quantity" type="number"
                                            class="form-control form-control-solid" placeholder="Enter Stock Quantity">
                                        @error('stock_quantity')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-71-3">
                                    <label class="required fs-6 fw-bold mb-2">Category</label>
                                    <select name="category"
                                        class="form-select form-select-solid select2-hidden-accessible"
                                        data-control="select2" data-hide-search="true"
                                        data-placeholder="Select a Team Member" data-select2-id="select2-data-71-3"
                                        tabindex="-1" aria-hidden="true">
                                        {{-- <option value="" data-select2-id="select2-data-3-x">Select Body Type...
                                        </option> --}}
                                        @foreach ($data->category as $row)
                                        <option @if($book->category_id==$row->id) {{'selected'}} @endif
                                            value="{{$row->id}}"
                                            data-select2-id="select2-data-3-{{$row->id}}">{{$row->category_name}}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>



                                {{-- row 3 --}}
                                <div class="d-flex flex-column mb-8">
                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Description</span>
                                    </label>
                                    <textarea name="description" class="form-control form-control-solid" rows="3"
                                        placeholder="Enter Description">{{ $book->description }}</textarea>
                                    @error('description')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-71-3">
                                    <label class="required fs-6 fw-bold mb-2">Language</label>
                                    <select name="language"
                                        class="form-select form-select-solid select2-hidden-accessible"
                                        data-control="select2" data-hide-search="true"
                                        data-placeholder="Select a Team Member" data-select2-id="select2-data-71-3"
                                        tabindex="-1" aria-hidden="true">
                                        {{-- <option value="" data-select2-id="select2-data-3-x">Select Body Type...
                                        </option> --}}
                                        @foreach ($data->language as $row)
                                        <option @if($book->language_id==$row->id) {{'selected'}} @endif
                                            value="{{$row->id}}"
                                            data-select2-id="select2-data-3-{{$row->id}}">{{$row->language}}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('language')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-71-5">
                                    <label class="required fs-6 fw-bold mb-2">Publisher</label>
                                    <select name="publisher"
                                        class="form-select form-select-solid select2-hidden-accessible"
                                        data-control="select2" data-hide-search="true"
                                        data-placeholder="Select a Team Member" data-select2-id="select2-data-71-5"
                                        tabindex="-1" aria-hidden="true">
                                        @foreach ($data->publisher as $row)
                                        <option @if($book->publisher_id==$row->id) {{'selected'}} @endif
                                            value="{{$row->id}}"
                                            data-select2-id="select2-data-5-{{$row->id}}">{{$row->publisher_name}}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('publisher')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Publication Date</span>
                                        </label>
                                        <input value="{{ $book->publication_date }}" name="publication_date" type="date"
                                            class="form-control form-control-solid"
                                            placeholder="Enter Publication Date">
                                        @error('publication_date')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                {{-- row 4 --}}
                                <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-71-13">
                                    <label class="required fs-6 fw-bold mb-2">Edition</label>
                                    <select name="edition"
                                        class="form-select form-select-solid select2-hidden-accessible"
                                        data-control="select2" data-hide-search="true"
                                        data-placeholder="Select a Team Member" data-select2-id="select2-data-71-13"
                                        tabindex="-1" aria-hidden="true">
                                        @foreach ($data->edition as $row)
                                        <option @if($book->edition_id==$row->id) {{'selected'}} @endif
                                            value="{{$row->id}}"
                                            data-select2-id="select2-data-13-{{$row->id}}">{{$row->edition}}</option>
                                        @endforeach
                                    </select>
                                    @error('edition')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Pages Count</span>
                                        </label>
                                        <input value="{{ $book->pages_count }}" name="pages_count" type="text"
                                            class="form-control form-control-solid" placeholder="Enter Pages Count">
                                        @error('pages_count')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-71-14">
                                    <label class="required fs-6 fw-bold mb-2">Reading Age Group</label>
                                    <select name="reading_age_group"
                                        class="form-select form-select-solid select2-hidden-accessible"
                                        data-control="select2" data-hide-search="true"
                                        data-placeholder="Select a Team Member" data-select2-id="select2-data-71-14"
                                        tabindex="-1" aria-hidden="true">
                                        @foreach ($data->readingAgeGroup as $row)
                                        <option @if($book->reading_age_group_id==$row->id) {{'selected'}} @endif
                                            value="{{$row->id}}"
                                            data-select2-id="select2-data-14-{{$row->id}}">{{$row->reading_age_group}}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('reading_age_group')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- row 5 --}}
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Length (cm)</span>
                                        </label>
                                        <input value="{{ $book->length }}" name="length" type="text"
                                            class="form-control form-control-solid" placeholder="Enter Length (cm)">
                                        @error('length')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Width (cm)</span>
                                        </label>
                                        <input value="{{ $book->width }}" name="width" type="text"
                                            class="form-control form-control-solid" placeholder="Enter Width (cm)">
                                        @error('width')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Height (cm)</span>
                                        </label>
                                        <input value="{{ $book->height }}" name="height" type="text"
                                            class="form-control form-control-solid" placeholder="Enter Height (cm)">
                                        @error('height')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                {{-- row 6 --}}
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Weight (g)</span>
                                        </label>
                                        <input value="{{ $book->weight }}" name="weight" type="text"
                                            class="form-control form-control-solid" placeholder="Enter Weight (g)">
                                        @error('weight')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">ISBN 10</span>
                                        </label>
                                        <input value="{{ $book->isbn_10 }}" name="isbn_10" type="text"
                                            class="form-control form-control-solid" placeholder="Enter ISBN 10">
                                        @error('isbn_10')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">ISBN 13</span>
                                        </label>
                                        <input value="{{ $book->isbn_13 }}" name="isbn_13" type="text"
                                            class="form-control form-control-solid" placeholder="Enter ISBN 13">
                                        @error('isbn_13')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="separator separator-dashed my-10"></div>

                                {{-- row 9 --}}
                                @for ($i=1;$i<7;$i++) <div class="col-lg-2">
                                    {{-- {{ asset($book->bookImage[$i-1]->image_path) ?? '' }} --}}
                                    <label class="required fs-6 fw-bold mb-2">Book Image {{$i}}</label>
                                    <div class="form-group">
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                            style="background-image: url({{ asset('assets/media/avatars/book.png') }})">
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url({{ asset($book->bookImage[$i-1]->image_path ?? '/assets/media/avatars/book.png')}})">
                                            </div>
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change Book Image">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <input type="file" name="book_image_{{$i}}"
                                                    accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="book_image_url_{{$i}}"
                                                    accept=".png, .jpg, .jpeg"
                                                    value="{{ $book->bookImage[$i-1]->image_path ?? '' }}" />
                                            </label>
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel Book Image">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove Book Image">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                        </div>
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    </div>
                            </div>
                            @endfor

                        </div>
                </div>

                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <a type="reset" class="btn btn-light btn-active-light-primary me-2"
                        href="{{route('admin.books')}}">Discard</a>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>

                </form>

            </div>
        </div>

    </div>
</div>

</div>


<script>
    // location.reload();
    </script>


@endsection
