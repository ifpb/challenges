require_relative "../../src/Library/library"

describe "The Library of Mr Severino" do
  context "sort codes collection 3000, 2000, 1000" do
    it "it 1000,2000,3000" do
      codes = ['3000', '2000', '1000'];
      expected = ['1000', '2000', '3000'];
      expect(Library.sort(codes)).to eq(expected)
    end
  end    

  xcontext "sort codes collection 1233, 0015, 0100" do
    it "it 0015,0100,1233" do
      codes = ['1233', '0015', '0100'];
      expected = ['0015', '0100', '1233'];
      expect(Library.sort(codes)).to eq(expected)
    end
  end    

  xcontext "sort codes collection 0752, 1110, 0001, 6322, 8000, 6321, 0000" do
    it "it 0000,0001,0752,1110,6321,6322,8000" do
      codes = ['0752', '1110', '0001', '6322', '8000', '6321', '0000'];
      expected = ['0000', '0001', '0752', '1110', '6321', '6322', '8000'];
      expect(Library.sort(codes)).to eq(expected)
    end
  end    
end
