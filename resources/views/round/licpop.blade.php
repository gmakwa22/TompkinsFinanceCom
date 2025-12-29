@isset($licpopwarning)
      @if ($licpopwarning === "kwartaloans")
          @include('lic.kwartaloans')
      @elseif ($licpopwarning === "megacashbucks")

      @elseif ($licpopwarning === "paisacashloans")
          @include('lic.paisacashloans')
      @elseif ($licpopwarning === "prairieskyloans")
          @include('lic.prairieskyloans')
      @elseif ($licpopwarning === "qualitycashloans")
          @include('lic.qualitycashloans')
      @elseif ($licpopwarning === "reliablespeedyloans")
          @include('lic.reliablespeedyloans')
      @elseif ($licpopwarning === "myonlinecash")
          @include('lic.myonlinecash')
      @elseif ($licpopwarning === "6hfinancial")
          @include('lic.6hfinancial')
      @else

      @endif
@endisset
