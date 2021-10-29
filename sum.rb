def sum_recursive(numbers)
    return 0  if numbers.empty?
    number = numbers.pop
    return number + sum_recursive(numbers)
end

def sum_iterative(numbers)
    res = 0
    numbers.each do |i|
        res += i
    end
    res
end

