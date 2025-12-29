<section class="full-width headerspecial" style="background: url(/images2/{{$bannerbg}}) no-repeat; background-size: cover; background-color:#ffffff">
  <span class="background-image" role="img" aria-label="{{ $headalt ?? "Short Term Loans Canada" }}"> </span>
  <div class="container spcontainer">
    <div class="row">
      <div class="col-lg-7 headermarg" style="margin-top:{{ $martop ?? "15" }}%;">
      <div class="page-title-name align-middle col-lg-12">
    <h1 class="display-3 headertext font-weight-bold {{ $headalign ?? "text-right" }}" style="color:{{ $headtxtcolor ?? "#b2752d" }}; -webkit-text-stroke: 2px black;">@if ("$land" == "l1")
      HIGHEST LOANS IN CANADA
    @elseif ("$land" == "l2")
    Extremely Fast Payday Advance
    @elseif ("$land" == "l3")
      Worry Free Short Term Lending
    @elseif ("$land" == "l4")
      HIGHEST APPROVALS IN CANADA
    @elseif ("$land" == "l5")
      HIGHEST APPROVALS IN CANADA
    @else
        {{ $headpg ?? "Extremely Fast Payday Advance" }}
    @endif</h1>
          <p class="{{ $headalign ?? "text-right" }}" style="font-size:18px; margin:3px;"><mark>{{ $headsub ?? "Canada’s most accessible loans" }}</mark></p>
        </div>
     </div>
     <div class="phonecalculator col-xs-12 col-sm-5 alpha omega f-right" style="margin-top:9%;">
       @if(isset($headphonehide))
       <div class="nophone" style="height: 550px;"></div>
       @else
         @include('landers.phonelander')
<script defer src="/js/script-min.js"></script>
       @endif
     </div>
     </div>
  </div>
</section>
