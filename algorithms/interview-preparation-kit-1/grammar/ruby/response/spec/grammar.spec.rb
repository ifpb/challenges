require_relative "../src/grammar"

describe Grammar do
  describe ".spelling" do
    context "programador" do
      it "P-R-O-G-R-A-M-A-D-O-R" do
        expect(Grammar.spelling('programador')).to eql('P-R-O-G-R-A-M-A-D-O-R')
      end
    end
    
    context "o dia está chuvoso" do
      it "O-D-I-A-E-S-T-Á-C-H-U-V-O-S-O" do
        expect(Grammar.spelling('o dia está chuvoso')).to eql('O-D-I-A-E-S-T-Á-C-H-U-V-O-S-O')
      end
    end
  end
end