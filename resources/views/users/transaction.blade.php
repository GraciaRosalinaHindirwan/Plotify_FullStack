@extends("layouts/users")

@section("content")
   <main> 
      <!-- looping -->
        <section class="px-[80px]">
            <div class="py-[60px] px-[80px] border-2 border-[#1E1E1E] rounded-xl">
                <h1 class="text-4xl font-bold">Riwayat Pembelian</h1>
                <ul class="pt-[2rem] space-y-6">
                    <li>
                        <div class="p-[1px] bg-gradient-to-r from-[#0E21A0] via-[#B153D7] to-[#4D2FB2] rounded-xl">
                            @include("components/users/card-transaction", [
                                
                            ])
                        </div>
                    </li>
                    <li>
                     <li>
                  
                        </article>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        
    </main>
@endsection
