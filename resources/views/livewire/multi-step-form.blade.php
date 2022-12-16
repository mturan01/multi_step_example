<div>

    <form wire:submit.prevent="register">
        {{-- STEP 1 --}}
        @if($currentStep==1)
            <div class="step-one">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Adım 1/4 Kişi Detayları</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">İsminiz</label>
                                    <input type="text" class="form-control" placeholder="Enter First Name"
                                           wire:model="first_name">
                                    <span class="text-danger">@error('first_name'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Soyadınız</label>
                                    <input type="text" class="form-control" placeholder="Enter Last Name"
                                           wire:model="last_name">
                                    <span class="text-danger">@error('last_name'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cinsiyetiniz</label>
                                    <select class="form-control" wire:model="gender">
                                        <option value="" selected>Choose gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    <span class="text-danger">@error('gender'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Yaşınız</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Age" wire:model="age">
                                    <span class="text-danger">@error('age'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"></div>
                        <label for="">Açıklama</label>
                        <textarea class="form-control"  cols="2" rows="2" wire:model="description"></textarea>
                        <span class="text-danger">@error('description'){{$message}}@enderror</span>
                    </div>
                </div>
            </div>
        @endif
        {{--STEP 2--}}
        @if($currentStep==2)
            <div class="step-two">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Adım 2/4 Adres & İletişim</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email Adres</label>
                                    <input type="text" class="form-control" placeholder="Enter Email Address"
                                           wire:model="email">
                                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Telefon Numarası</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone Number"
                                           wire:model="phone">
                                    <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Yaşadığınız Ülke</label>
                                    <select  class="form-control" wire:model="country">
                                        <option value="" selected>Ülke Seçiniz</option>
                                        <option value="Turkey" >Turkey</option>
                                        <option value="Azerbaycan" >Azerbaycan</option>
                                        <option value="Türkmenistan" >Türkmenistan</option>
                                        <option value="Kırgızistan" >Kırgızistan</option>
                                        <option value="Kuzey Kıbrıs" >Kuzey Kıbrıs</option>
                                        <option value="Moğolistan" >Moğolistan</option>
                                        <option value="Moğolistan" >Moğolistan</option>
                                        <option value="Güney Kore" >Güney Kore</option>
                                    </select>
                                    <span class="text-danger">@error('country'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Şehir</label>
                                    <input type="text" class="form-control" placeholder="Enter City" wire:model="city">
                                    <span class="text-danger">@error('city'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        {{--STEP 3--}}

        @if($currentStep==3)
            <div class="step-three">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Adım 3/4 Frameworks Deneyimleriniz</div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam deleniti, excepturi fugit qui sint sit.
                        <div class="frameworks d-flex flex-column align-items-left mt-2">
                            <label for="laravel">
                                <input type="checkbox" id="laravel" value="laravel" wire:model="frameworks">Laravel
                            </label>
                            <label for="codeigniter">
                                <input type="checkbox" id="laravel" value="codeigniter" wire:model="frameworks">Codeigniter
                            </label>
                            <label for="vuejs">
                                <input type="checkbox" id="laravel" value="vuejs" wire:model="frameworks">Vue js
                            </label>
                            <label for="cakePHP">
                                <input type="checkbox" id="laravel" value="cakePHP" wire:model="frameworks">CakePHP
                            </label>
                        </div>
                        <span class="text-danger">@error('frameworks'){{$message}}@enderror</span>
                    </div>
                </div>
            </div>
        @endif
        {{--STEP 4--}}
        @if($currentStep==4)
            <div class="step-four">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Adım 4/4 Ekstralar</div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, aspernatur assumenda deleniti deserunt odit qui!
                        <div class="form-group"></div>
                        <label for="cv">CV</label>
                        <input type="file" class="form-control" wire:model="cv">
                        <span class="text-danger">@error('cv'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="terms" class="d-block">
                            <input type="checkbox"  id="terms" wire:model="terms"> You must agree with our <a href="#">Terms and Conditions</a>
                        </label>
                        <span class="text-danger">@error('terms'){{$message}}@enderror</span>
                    </div>
                </div>
            </div>
        @endif
        <div class="actions-buttons d-flex justify-content-between bg-white pt-2 pb-2">
            @if($currentStep == 1)
                <div></div>
            @endif

            @if($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Geri</button>
            @endif

            @if($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">İleri</button>
            @endif

            @if($currentStep == 4)
                <button type="submit" class="btn btn-md btn-primary">Gönder</button>
            @endif



        </div>
    </form>
</div>
