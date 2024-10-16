@extends('layouts.app')

@section('title', 'Édition du profil')

@section('content')
<div class="d-flex flex-column flex-column-fluid">

    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                    Mon profil
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
</div>
<div class="app-main flex-column flex-row-fluid " id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">


            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-xxl ">
                <!--begin::Form-->
                <form method="POST" action="{{ route('admin.account.update', $user->id) }}" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data" id="kt_account_profile_details_submit">
                    @csrf
                    @method('PUT')
                    <!--begin::Aside column-->
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10" data-select2-id="select2-data-145-9pcc">
                        <!--begin::Thumbnail settings-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Image</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <!--begin::Image input placeholder-->
                                <style>
                                    .image-input-placeholder {
                                        background-image: url("{{ isset($user->avatar) ? asset('storage/' . $user->avatar) : asset('/assets/media/svg/files/blank-image.svg') }}");

                                    }

                                    [data-bs-theme="dark"] .image-input-placeholder {
                                        background-image: url("{{ isset($user->avatar) ? asset('storage/' . $user->avatar) : asset('/assets/media/svg/files/blank-image-dark.svg') }}");
                                    }
                                </style>
                                <!--end::Image input placeholder-->

                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <!--end::Preview existing avatar-->

                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar">
                                        <input type="hidden" name="avatar_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                                    <!--end::Cancel-->

                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Ajouter l'image de l'article</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Thumbnail settings-->



                    </div>
                    <!--end::Aside column-->

                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade active show" id="kt_ecommerce_add_product_general" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10" style="max-width: 927.5px;">

                                    <!--begin::General options-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Bio</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <div>
                                                <!--begin::Input group content-->

                                                <!--end::Input group content-->
                                                <!--begin::Label-->
                                                <!--end::Label-->
                                                <div class="">
                                                    <div id="content" data-content="{{ old('bio', isset($user) ? $user->bio : '') }}">
                                                    </div>
                                                    <textarea name="bio" id="textarea" style="display:none;"></textarea>
                                                    <div id="editor"></div>
                                                </div>


                                                <!--begin::Description-->
                                                <div class="text-muted fs-7 mt-2">C'est à vous de jouer.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::General options-->



                                </div>
                            </div>
                            <!--end::Tab pane-->

                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10" style="max-width: 927.5px;">

                                    <!--begin::Inventory-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Fonctionnalité avancé</h2>
                                            </div>
                                            Il n'y a actuellement aucune option avancée disponible dans cette section.
                                            Cependant, nous envisageons des évolutions futures pour enrichir cette
                                            partie avec des fonctionnalités supplémentaires. Restez à l'écoute pour les
                                            mises à jour !
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->

                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::Inventory-->

                                </div>
                            </div>
                            <!--end::Tab pane-->

                        </div>
                        <!--end::Tab content-->

                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{route('admin.post.index')}}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
                                Retour
                            </a>
                            <!--end::Button-->

                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                <span class="indicator-label">
                                    Enregistrer
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Main column-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->

    </div>
    <!--end::Content wrapper-->
</div>




<link href="{{ asset('assets/plugins/custom/quil/css/quil.css') }}" rel="stylesheet">
<script src="{{ asset('assets/plugins/custom/quil/js/quil.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quill = new Quill('#editor', {
            theme: 'snow'
        });
        var content = document.getElementById('content').getAttribute('data-content');

        // Charge le contenu existant dans Quill
        quill.root.innerHTML = content;

        quill.on('text-change', function() {
            document.getElementById('textarea').value = quill.root.innerHTML;
        });
    });
</script>
<script src="{{ asset('assets/js/custom/select2-4.0.13/dist/js/select2.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('select[name="category_id"]').select2({
            placeholder: "Choisir une catégorie...",
            allowClear: true
        });

        $('#tag_multiple').select2({
            placeholder: "Sélectionner des tags",
            allowClear: true
        });
    });
</script>

@endsection