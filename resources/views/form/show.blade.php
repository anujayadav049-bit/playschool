@extends('layouts.app') 
@section('content')
<style>
  #header-sticky { background: #e35e1b !important; position: relative !important; }
  .breadcrumb-section { padding: 40px 0 !important; margin-top: 0 !important; background: linear-gradient(135deg, #FFF8F0 0%, #FFEEDD 100%) !important; }
  .form-control:focus { border-color: #e35e1b !important; box-shadow: 0 0 0 3px rgba(227,94,27,0.1) !important; }
  .theme-btn { background: #e35e1b; color: #fff; padding: 14px 32px; border-radius: 12px; font-weight: 700; transition:0.3s; border:none; display:inline-flex; align-items:center; gap:8px; }
  .theme-btn:hover { background: #c44a10; transform: translateY(-2px); }
</style>

<section class="breadcrumb-section">
  <div class="container text-center">
    <h2 class="text-3xl font-bold" style="font-family: 'Poppins', sans-serif;">{{ $form->name }}</h2>
    <p class="text-sm mt-2 text-gray-600"><a href="/" class="text-orange-600 font-semibold">Home</a> / {{ $form->name }}</p>
  </div>
</section>

<section class="contact-section fix section-padding" style="padding-top:40px;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="contact-form" style="background: #fff; padding: 35px; border-radius: 24px; box-shadow: 0 12px 50px rgba(0,0,0,0.07); border-top: 6px solid #e35e1b;">

          @if(session('success'))
            <div class="alert alert-success" style="background:#ECFDF5; border:1px solid #6EE7B7; color:#065F46; padding:16px; border-radius:12px; margin-bottom:20px; font-weight:600;">
              ✅ {{ session('success') }}
            </div>
          @endif

          <div class="text-center mb-4">
            <h3 class="mb-2" style="font-weight:800; font-size:24px;">{{ $form->name }}</h3>
            <p class="text-gray-500 text-sm">Please fill all required fields marked with *</p>
          </div>

          
            <form action="{{ route('form.submit', $form->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            @foreach($form->fields as $field)
              <div class="col-md-{{ in_array($field->type, ['textarea']) ? '12' : '6' }} mb-4">
                <label class="form-label" style="font-weight:600; font-size:14px; margin-bottom:8px; display:block;">
                  {{ ucfirst($field->label) }} 
                  @if($field->is_required)<span class="text-danger" style="color:red;">*</span>@endif
                </label>
                
                @if($field->type=='text')
                  <input type="text" name="field_{{ $field->id }}" class="form-control" placeholder="Enter {{ $field->label }}" 
                  {{ $field->is_required ? 'required' : '' }} style="height:52px; border-radius:12px; border:2px solid #f0f0f0; padding-left:16px;">

                @elseif($field->type=='number')
                  <input type="number" name="field_{{ $field->id }}" class="form-control" placeholder="Enter {{ $field->label }}" 
                  {{ $field->is_required ? 'required' : '' }} style="height:52px; border-radius:12px; border:2px solid #f0f0f0;">

                @elseif($field->type=='email')
                  <input type="email" name="field_{{ $field->id }}" class="form-control" placeholder="Enter {{ $field->label }}" 
                  {{ $field->is_required ? 'required' : '' }} style="height:52px; border-radius:12px; border:2px solid #f0f0f0;">

                @elseif($field->type=='date')
                  <input type="date" name="field_{{ $field->id }}" class="form-control" 
                  {{ $field->is_required ? 'required' : '' }} style="height:52px; border-radius:12px; border:2px solid #f0f0f0;">

                @elseif($field->type=='dropdown')
                  <select name="field_{{ $field->id }}" class="form-control" {{ $field->is_required ? 'required' : '' }} style="height:52px; border-radius:12px; border:2px solid #f0f0f0; width:100%">
                    <option value="">Select {{ $field->label }}</option>
                    @foreach(explode(',', $field->options) as $opt)
                      @if(trim($opt) != '')
                        <option value="{{ trim($opt) }}">{{ trim($opt) }}</option>
                      @endif
                    @endforeach
                  </select>

                @elseif($field->type == 'radio')
  <div style="display:flex;gap:15px;margin-top:5px">
    @foreach(explode(',', $field->options) as $opt)
      @php $opt = trim($opt); @endphp
      @if($opt)
      <label style="display:flex;align-items:center;gap:5px;background:#FFF8F0;border:2px solid #FFE1C7;padding:8px 15px;border-radius:20px;cursor:pointer;font-size:13px">
        <input type="radio" name="field_{{ $field->id }}" value="{{ $opt }}" {{ $field->is_required?'required':'' }}> {{ $opt }}
      </label>
      @endif
    @endforeach
  </div>

@elseif($field->type == 'select' || $field->type == 'dropdown')
  <select name="field_{{ $field->id }}" {{ $field->is_required?'required':'' }} style="width:100%;padding:12px;border:2px solid #FFE1C7;border-radius:12px;background:#FFF8F0">
    <option value="">Select {{ $field->label }}</option>
    @foreach(explode(',', $field->options) as $opt)
      @php $opt = trim($opt); @endphp
      @if($opt)<option value="{{ $opt }}">{{ $opt }}</option>@endif
    @endforeach
  </select>

                @elseif($field->type=='textarea')
                  <textarea name="field_{{ $field->id }}" class="form-control" rows="3" placeholder="Enter {{ $field->label }}" 
                  {{ $field->is_required ? 'required' : '' }} style="border-radius:12px; border:2px solid #f0f0f0; padding:12px 16px;"></textarea>

                @elseif($field->type=='file')
                  <input type="file" name="field_{{ $field->id }}" class="form-control" {{ $field->is_required ? 'required' : '' }} style="height:52px; border-radius:12px; border:2px dashed #FFD6B8; padding-top:12px; background:#FFF8F0;">

                @else
                  <input type="text" name="field_{{ $field->id }}" class="form-control" {{ $field->is_required ? 'required' : '' }} style="height:52px; border-radius:12px;">
                @endif
              </div>
            @endforeach
            </div>

            <button type="submit" class="theme-btn mt-3 w-100 justify-content-center">Submit Now <i class="icon-arrow-icon"></i></button>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection